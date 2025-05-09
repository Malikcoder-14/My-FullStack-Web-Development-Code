<?php

include_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //   $my_email =  "Muddsser@gmail.com";

    echo $email;

    if (empty($email) || empty($password)) {

        //  echo "Please fill all fields";
        $msg = "Please fill all fields";
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

        print_r($stmt);

        if ($stmt->num_rows == 1) {

            echo "User Found";
            $stmt->bind_result($id, $name, $hashpassword);
            $stmt->fetch();
            //    print_r($stmt);
            if (password_verify($password, $hashpassword)) {
                echo $name;
            } else {
                $msg = "Password not matched";
                header( "Location: ../Login.php?msg=$msg");
                exit;
            }
        } else {

            $msg = "User not Found";
            header("Location: ../Login.php?msg = $msg");
            exit;

        }
    }
}
?>