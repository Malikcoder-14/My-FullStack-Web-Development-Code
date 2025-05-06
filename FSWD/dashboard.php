<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 200px;
      background-color: #343a40;
      color: white;
      padding-top: 60px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
      flex: 1;
    }
    .topbar {
      position: fixed;
      top: 0;
      left: 200px;
      right: 0;
      z-index: 1030;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center">Admin</h4>
    <a href="#">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Reports</a>
    <a href="#">Settings</a>
    <a href="#">Logout</a>
  </div>

  <!-- Topbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark topbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard</a>
            
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content mt-5">
  <p> Welcome to the Admin Dashboard <?php echo $_GET['name'] ?> </p>
    <p>This is your main content area. Add charts, tables, or widgets here.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>