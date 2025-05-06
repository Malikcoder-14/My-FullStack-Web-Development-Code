<?php 
  // Server side request should be POST. In stead o if(set()) statement as in 
  // register.php here we use $_SERVER['REQUEST_METHOD'] == 'POST' .


   if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    //  We use strlen(string: $name) to find the length of a string , i.e echo strlen($name), 
    // Similarly we ue  trim function to tell server to cur/reduce spaces before or after email or password 
    // user entered unintentionally.
  
      $name = trim(string: $_POST['myname']);
      $email = trim(string: $_POST['myemail']);
      $password = $_POST['mypassword'];
      $confirm_password = $_POST['my_confirm_Password'];

      echo "The length of name". " " . $name . " " ." is = "  . strlen($name)."<br>";
      echo  $email. "<br>";
      echo $password. "<br>";
      echo $confirm_password . "<br>";

    //////////// SERVER SIDE FORM VALIDATON  ///////////////  
      
    $registerEmails = ["test@gmail.com", "malik@gmail.com", "Bilal@gmail.com", "Mubashar@gmail.com",
    "Adeel@gmail.com" ];

    if(empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
     echo "Please Fill all Fields";

    } else if( empty($name) || strlen($name < 2) ) {
        echo "Please enter a valid name";

    } else if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      echo "Please enter a valid email";
    } else if (in_array($email,$registerEmails)){
      echo "Email already exists";
    } else if(empty($password) || strlen($password) < 6) {
      echo "Please enter a valid password";
    }     
    else if((!preg_match("/[0-9]/" , $password) == 0) && (!preg_match("/[a-zA-Z]/", $password)==0)) 
    
    {   

      echo "Password must contain at least one letter and one number";
      
      echo "Password must contain at least one number";

       }  
   }
   
  ?>     

   


