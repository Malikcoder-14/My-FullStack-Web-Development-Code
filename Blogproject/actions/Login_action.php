<?php

    include_once 'conn.php';

    if($_SERVER['REQUEST_METHOD']== "POST") {

        $email = $_POST ['email'];
        $password = $_POST['password'];
    
        if(empty($email) || empty($password)) {

         //  echo "Please fill all fields";
              $msg = "Please fill all fields";
              header ("Location: ../Login.php?msg=$msg");
        exit;
         } else {
          //  $stmt =  $conn->prepare("SELECT id, name, email, password from users where email = ? AND id = ? ");
          //  $stmt->bind_param("ss", $email,  $id);
            
            $stmt =  $conn->prepare("SELECT id, name,  password from users where email = ? ");
            $stmt->bind_param("s", $email);
          
            $stmt->execute();
            echo    "<pre>";
            print_r($stmt);


         }
    } 

?> 
