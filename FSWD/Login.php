<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f7f9fc;
    }
    .login-card {
      max-width: 400px;
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

if(isset($_GET['email'])) {

  $userEmail = "malik@gmail.com";
  $password = "12345";
  
  $userinputEmail = $_GET['email'];
  $userinputPassword = $_GET['password'];
  
  // Following code is practice to understand the requirement of "and"
  // Operator in if else.
  
  // if($userEmail == $userinputEmail) {
  //   echo "Welcome back $userinputEmail";
  // }
  // else {
  //   echo "Invalid email or Password ";
  // }
  
  // if($password == $userinputPassword) {
  
  //   echo "Welcome back $userinputEmail";
  // }else {
  
  //   echo "Invalid email or password";
  
  // }
  
  if($userEmail == $userinputEmail && $password == $userinputPassword) {
  
    header(header: "Location: dashboard.php? name = $userinputEmail");
  }
  else {
    echo "Invalid email or password";
  }
  

 
}





?>

  <div class="container">
    <div class="login-card">
      <h2 class = "text-center "> Welcome Back </h2>
      <h2 class="text-center mb-4">Login to your account</h2>
      <form method= "get">
        <div class="mb-3">
          <label for="loginEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="loginEmail" name ="email" required>
        </div>
        <div class="mb-3">
          <label for="loginPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="loginPassword" name ="password" required>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">
              Remember me
            </label>
          </div>
          <a href="#" class="small">Forgot password?</a>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <p class="text-center mt-3 mb-0">Don't have an account? <a href="#">Register here</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>