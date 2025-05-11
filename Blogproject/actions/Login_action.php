
<?php

include_once 'conn.php';
  
 session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //   $my_email =  "Muddsser@gmail.com";

    echo $email;

    if (empty($email) || empty($password)) {

        //  echo "Please fill all fields";
        $msg = urlencode("Please fill all fields");
        header("Location: ../Login.php?msg=$msg");
        exit;
    } else {

        // $sql = "SELECT * FROM users";
        // $result = mysqli_query($conn, $sql);
        // print_r($result);
        // echo "<pre>";
        // $data = mysqli_fetch_assoc($result);
        // print_r($data);

        $stmt = $conn->prepare("SELECT id, name, password from users where u_email = ? ");
        $stmt->bind_param("s", $email);

        //   $stmt = $conn->prepare("SELECT * from users where  email = ? ");
        //    $stmt->bind_param("s",  $email);

        $stmt->execute();
        $stmt->store_result();

        echo "<pre>";

        echo "Number of rows: " . $stmt->num_rows;
     //   print_r($stmt);

        if ($stmt->num_rows == 1) {

            echo "User Found";
            $stmt->bind_result($id, $name, $hashed_password);
            $stmt->fetch();
            //    print_r($stmt);
           if (password_verify($password, $hashed_password)) {
                header("Location: ../Dashboard.php");
             
                $_session["id"] = $id;
                $_SESSION["name"] = $name;

            } else {
                $msg = "Password not matched";
               header("Location: ../Login.php?msg=" . urlencode($msg));
                exit;
            }
        } else {

            $msg = "User not Found";
            header("Location: ../Login.php?msg=$msg");
            exit;

        }
    }
}
?>