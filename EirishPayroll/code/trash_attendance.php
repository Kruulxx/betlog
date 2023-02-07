<?php     

require_once "home.php";

$con=mysqli_connect('localhost','root','','eirish_payroll');
$result=mysqli_query($con,"select * from archive_attendancee");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  rel="stylesheet">
    <title>Payroll</title>
</head>
<body>
<div class="border border-dark bg-danger">
 <h1 class="text-white d-flex justify-content-center" style="font-size:25px; margin-top:25px; margin-bottom:25px;">Archive Employees</h1>
</div>
    <div class="container" style="margin-top:80px;">
      <table id="example" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                    <th>EmpID</th>
                    <th>Name</th>
                    <th>Datalog</th>
                    <th>In/Out Status</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
                 <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr >
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['id']?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['dateTime']?></td>
                          <td><?php echo $row['logType']?></td>
                          
                          <td  class="border-start border-end" style="margin-top:10px;">
                          <a href="restore_attend.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Restore</a>
                          <a href="delete_attend.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Delete</a>
                          </td>
                    </tr>
            </tbody>
            <?php } ?>
           
      </table>


      <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Attendance Info</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>

    </div>

   







<?php require_once "scripts.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
<script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'view.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
               
</body>
</html>

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