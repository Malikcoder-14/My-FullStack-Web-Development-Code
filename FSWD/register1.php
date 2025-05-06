<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <style>
 
    body {
      background: #f7f9fc;
    }
    .register-card {
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
  </style>

</head>

<body>

<?php 

        
    if(isset($_GET['myname'])) {

      $name = $_GET['myname'];
      $email = $_GET['myemail'];
      $password = $_GET['mypassword'];
      $confirm_password = $_GET['my_confirm_Password'];

      echo $name;
      echo $email;
      echo $password;
      echo $confirm_password;
      
    }
  ?>     

  <div class="container">
    <div class="register-card">
      <h3 class="form-title text-center">Create Account</h3>

       <!-- <?php 
    
    if(isset($_GET['myname'])) {

      // echo "<p class = 'alert alert-success'> Your Account created " . $name ." please Login" .  "</p>" ;
      
      echo " <p class = 'alert alert-success'> Your Account created "  .  "  " . $name . "  " . " please Login" . "</p>";
      
    }
   ?>       -->
  
    
    <!-- If i want my Account created message in paragaraph in html i.e 
    
    <p class="alert alert-success"> <?php echo "Your Account created". $name ."please Login" ; ?></p>  
    Then we use following code .....
    -->

   
    <!-- <?php 
    
    if(isset($_GET['myname'])) { ?>

            
      <p class= "alert alert-success"> <?php echo "Your Account created " ."  " . $name . "  " . " please Login" ; ?> </p>
      
    <?php }  ?>        -->


     
      
      <p class="text-muted text-center" > Please fill in this form to register </p>

      <form method= "post" action="action/register_action.php">>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name = "myname" required>
        </div>
        <div class="m b-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name = "myemail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name = "mypassword" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" name = "my_confirm_Password" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
        <p class="text-center mt-3 mb-0">Already have an account? <a href="#">Login here</a></p>
        
      </form>
      
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


