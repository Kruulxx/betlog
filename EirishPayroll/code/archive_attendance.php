<?php   
  
  require_once "connection.php"; 

  $id = $_GET['id'];


  $query= "INSERT INTO `archive_attendancee` (`id`, `name`, `dateTime`, `logType`) SELECT  `id`, `name`, `dateTime`, `logType` FROM `attendancee` WHERE `id` = '$id';";

  if(mysqli_query($con, $query)){
    $query = "DELETE FROM `attendancee` WHERE id = '$id'";  
    if(mysqli_query($con, $query)) {  
        echo "<script>" . "window.location.href='attendance.php';" . "</script>";  
   }else{  
        echo "Error: ".mysqli_error($link);  
   }  
  }



?>
