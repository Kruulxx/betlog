<?php

 require_once('home.php');  
 include "connection.php";
 $conn=mysqli_connect('localhost','root','','eirish_payroll');
 $result=mysqli_query($conn,"select * from employee");
 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datatable</title>
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
 
</head>
<body>
 <div class="container" style="margin-top:50px;">    
    
             <div class="border-bottom my-3"></div>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add Employee
                </button>
                <button type="button" class="btn btn-dark" onclick="location.href='export.php'">Export to CSV</button>
       <div class="border-bottom my-3"></div>
          <table class="table table-hover">
                  <thead>
                      <tr>
                        <th>EMP ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th>Rate</th>
                        <th>Actions</th>
                      </tr>

                </thead>
                    <tbody>
                          <?php while($row=mysqli_fetch_assoc($result)){?>
                      <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['address']?></td>
                          <td><?php echo $row['position']?></td>
                          <td><?php echo $row['rate']?></td>
                          <td>
                            <a href="view.php?id=<?php echo $row['id'] ?>"><button class="btn btn-dark">View</button></a>
                            <a href="update.php?id=<?php echo $row['id'] ?>"><button class="btn btn-dark">Edit</button></a>
                            <a href="archive.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Archive</a>
                            
                             
                          </td>
                      </tr>
                          

                          <?php } ?>
                    
                </thead>
              
              </table>
              <?php require_once('addemployee.php'); ?>
              
   </div>
   <?php require_once('footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
</body>
</html>