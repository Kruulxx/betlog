<?php   
   
  require_once "connection.php"; 

  $id = $_GET['id'];


  $query= "INSERT INTO `employee` (`emp_id`, `name`, `address`, `position`, `rate`) SELECT  `emp_id`, `name`, `address`, `position`, `rate` FROM `archive` WHERE `id` = '$id';";

  if(mysqli_query($con, $query)){
    $query = "DELETE FROM `archive` WHERE id = '$id'";  
    if(mysqli_query($con, $query)) {  
        echo "<script>" . "window.location.href='trash.php';" . "</script>";  
   }else{  
        echo "Error: ".mysqli_error($link);  
   }  
  }



?>