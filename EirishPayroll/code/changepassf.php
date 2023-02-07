<?php
session_start();
include "connection.php";

$password = $_POST['password'];
$password2 = $_POST['password2'];
$old_password = $_POST['old_password'];

$stmt = $con->prepare("SELECT password FROM plus_signup WHERE id = :id");
$stmt->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR, 15);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);

$status = "OK";
$msg = "";

if ($row->password != md5($old_password)) {
  $msg .= "Your old password is not matching as per our record.<br>";
  $status = "NOTOK";
}

if (strlen($password) < 3 || strlen($password) > 8) {
  $msg .= "Password must be more than 3 characters in length and a maximum of 8 characters.<br>";
  $status = "NOTOK";
}

if ($password != $password2) {
  $msg .= "Both passwords do not match.<br>";
  $status = "NOTOK";
}

if ($status != "OK") {
  echo "<font face='Verdana' size='2' color='red'>$msg</font><br><center><input type='button' value='Retry' onclick='history.go(-1)'></center>";
} else {
  $password = md5($password);
  $sql = $con->prepare("UPDATE plus_signup SET password = :password WHERE userid = :userid");
  $sql->bindParam(":password", $password, PDO::PARAM_STR, 32);
  $sql->bindParam(":userid", $_SESSION['userid'], PDO::PARAM_STR, 32);
  if ($sql->execute()) {
    echo "<font face='Verdana' size='2'><center>Thanks <br> Your password has been changed successfully. Please keep changing your password for better security</font></center>";
  } else {
    echo "<font face='Verdana' size='2' color='red'><center>Sorry <br> Failed to change password. Contact the site admin</font></center>";
  }
}
?>