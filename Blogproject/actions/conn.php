<?php

$conn = new mysqli("localhost",username:"root",password:"",database:"blog-fswd-batch-31-lwr");

if ($conn->connect_error) {

    die("Connection Failed:". $conn->connect_error);
    } else 
    //{
      //  echo "Connected Successfully";    }


    //     $name = "Muddsser Hasnain ";
    //     $email = "Muddsser@gamil.com";
    //     $password = password_hash(password: "12345", algo:PASSWORD_DEFAULT);
    //  //   $sql = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')" ;

    //     $stmt = $conn->prepare("INSERT INTO users (name,email,password) VALUES(?,?,?)");

        
    //     $stmt->bind_param("sss",  $name,  $email,  $password);
       
    //     $stmt->execute();
    //     echo "New record created successfully";
              
?> 

        