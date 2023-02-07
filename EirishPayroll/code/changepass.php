<?php

require_once "changepassf.php";


?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form login-form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <h2>Change Password</h2>

          <label>Old Password</label>
          <input type="password" 
                 name="old_password" 
                 placeholder="Old Password">
                 <br>

          <label>New Password</label>
          <input type="password" 
                 name="password" 
                 placeholder="New Password">
                 <br>

          <label>Confirm New Password</label>
          <input type="password" 
                 name="password2" 
                 placeholder="Confirm New Password">
                 <br>

          <button type="submit" name="submit">CHANGE</button>
          <a href="home.php" class="ca">HOME</a>
        </form>
      </div>
   