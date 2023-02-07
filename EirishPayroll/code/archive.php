<?php   
  
  require_once "connection.php"; 

  $id = $_GET['id'];


  $query= "INSERT INTO `archive` (`emp_id`, `name`, `address`, `position`, `rate`) SELECT  `id`, `name`, `address`, `position`, `rate` FROM `employee` WHERE `id` = '$id';";

  if(mysqli_query($con, $query)){
    $query = "DELETE FROM `employee` WHERE id = '$id'";  
    if(mysqli_query($con, $query)) {  
        echo "<script>" . "window.location.href='employee.php';" . "</script>";  
   }else{  
        echo "Error: ".mysqli_error($link);  
   }  
  }



?>
