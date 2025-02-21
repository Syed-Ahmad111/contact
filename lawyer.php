<?php
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lawyer</title>
  
</head>
<body>
 <div class="container-fluid">
    <div class="row">
        <div class="col-3">
<?php include('sidebar.php');?>
        </div>
        <div class="col-9">
  <!-- Main Content -->
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Dashboard Content -->
    <div class="container mt-5">
      <div class="row">
        <!-- Dashboard Cards -->
        <div class="col-md-4">
        <h1>Welcome <?php echo $_SESSION['name']; ?></h1>
        </div>
        
      </div>

      <!-- Other Content Here -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Recent Activity
            </div>
            <div class="card-body">
              <ul>
                <li>User JohnDoe logged in</li>
                <li>Sales Report for February generated</li>
                <li>New feedback from customer: "Great service!"</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        </div>
    </div>
 </div>


 
</body>
</html>