<?php
// Load the database configuration file
 require_once('home.php');  
 include "connection.php";

// Get status message$result=mysqli_query($con,"select * from employee");
 
$con=mysqli_connect('localhost','root','','eirish_payroll');
$result=mysqli_query($con,"select * from payroll");

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>
<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datatable</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
 
</head>
<body>
 <div class="container" style="margin-top:50px;">    
         
 <div class="border-bottom my-3"></div> 
            <div class="dropdown my-3">
            
        
       
            <a href="javascript:void(0);" class="btn btn-dark" onclick="formToggle('importFrm');"><i class="plus"></i> Import Payroll</a>
      
 
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importpayroll.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-dark" name="Import" value="IMPORT">
        </form>
    </div>
                 
                      <div style="padding-top: 10px;" class="dropdown-menu">
                      <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                      Add Attendance </button> 
                      <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#add-attendance">
                  Add Time In
                </button>
                           <button data-toggle="modal" data-target="#modal-add-attendance-out" class="dropdown-item">Add Time Out</button>
                      </div>

             </div>
             <div class="border-bottom my-3"></div>
          <table class="table table-hover">
                  <thead>
                      <tr>
                  
                        <th>EmpID</th>
                        <th>Name</th>
                        <th>Days</th>
                        <th>Rate</th>
                        <th>Overtime</th>
                        <th>Gross Salary</th>
                        <th>Deductions</th>
                        <th>Net Salary</th>
                      </tr>

                </thead>
                <tbody>
                          <?php while($row=mysqli_fetch_assoc($result)){?>
                      <tr>
                        
                          <td><?php echo $row['emp_id']?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['days']?></td>
                          <td><?php echo $row['rate']?></td>
                          <td><?php echo $row['overtime']?></td>
                          <td><?php echo $row['gross_salary']?></td>
                          <td><?php echo $row['deductions']?></td>
                          <td><?php echo $row['net_salary']?></td>
                      </tr>
                          

                          <?php } ?>
                    
                </thead>
              
              </table>
            
       
      
  </div>
</div>
<?php require_once('footer.php'); ?>
<?Php require_once "script.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
 <!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</body>
</html>
