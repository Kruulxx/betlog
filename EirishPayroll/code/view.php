<?php

include 'connection.php';
require_once('scripts.php');

$id = $_GET['id'];
$employee="SELECT * FROM `employee` WHERE id=$id";
$result = mysqli_query($con, $employee);
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Payroll</title>
</head>
<body class="" v-on:click="Reload"> 
<table>
        <div class="container">
          
            <div class="page-header">
              <h1 class="page-title">
                <a href="employee.php" class="text-primary">Employee</a> <i style="font-size: 50px;" class="fa-solid fa-chevrons-right"></i> View Profile
              </h1>
             </div>

             <input type="hidden" name="id" class="txtField" value="<?php echo $row['emp_id']; ?>">
    
     <div class="col-12">
                <div class="card">
               <div class="">
              <form class="" method="POST" action="">
                <div class="card-body">
                  <h3 class="card-title"><strong>Personal Data</strong></h3>
                  <div class="row">

                  <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" readonly="" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" readonly="" name="address" class="form-control" value="<?php echo $row['address'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Position</label>
                        <input type="text" readonly="" name="position" class="form-control" value="<?php echo $row['position'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Rate</label>
                        <input type="text" readonly="" name="rate" class="form-control" value="<?php echo $row['rate'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <input type="text" readonly="" name="phonenumber" class="form-control" value="<?php echo $row['phonenumber'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Sex</label>
                        <input type="text" readonly="" name="sex" class="form-control" value="<?php echo $row['sex'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Civil Status</label>
                        <input type="text" readonly="" name="civil_status" class="form-control" value="<?php echo $row['civil_status'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">Person to be contacted in case of emergency</label>
                        <input type="text" readonly="" name="emergency_name" class="form-control" value="<?php echo $row['emergency_name'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <label class="form-label">His/Her contact details</label>
                        <input type="text" readonly="" name="emergency_contact" class="form-control" value="<?php echo $row['emergency_contact'] ?>">
                      </div>
                    </div>
                
        </table>
        <?php require_once('footer.php'); ?>     
       </div>
      
                    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            
   
    
</body>
</html>