<?php require_once "controllerUserData.php"; ?>

<?php   
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
  
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand " style="margin-left:20px; font-size:26px;" href="#">Eirish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
          
      <li class="nav-item dropdown" style="margin-left:50px;">
       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Employee
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="employee.php">List of Employee</a></li>
            <li><a class="dropdown-item" href="trash.php">Archive Employee</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" style="margin-left:50px;">
       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Attendance
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="attendance.php">List of Attendance</a></li>
            <li><a class="dropdown-item" href="trash_attendance.php">Archive Attendance</a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="payrolls.php">Payroll</a>
        </li>
        
      <li class="nav-item dropdown" style="margin-left:50px;">
       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
         
            <li><hr class="dropdown-divider"></li>
            <li><a href="logout.php" class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>

</ul>

</div>
        
      </ul>
    </div>
  </div>
</nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
