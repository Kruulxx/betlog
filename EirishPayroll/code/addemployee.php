<?php
   include "connection.php";
   
if (isset($_POST['save'])) {

    $numbers = '';
    for ($i = 0; $i < 10; $i++) {
      $numbers .= $i;
    }
  
    //$emp_id = substr(str_shuffle($numbers), 0, 9);
    //$emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $rate = $_POST['rate'];
    $phonenumber = $_POST['phonenumber'];
    $sex = $_POST['sex'];
    $civil_status = $_POST['civil_status'];
    $emergency_name = ucwords($_POST['emergency_name']);
    $emergency_contact = $_POST['emergency_contact'];

    $con= "INSERT INTO `employee` (`emp_id`, `name`, `address`, `position`, `rate`, `phonenumber`, `sex`, `civil_status`, `emergency_name`, `emergency_contact`) VALUES ('$emp_id', '$name', '$address', '$position', '$rate', '$phonenumber', '$sex', '$civil_status', '$emergency_name', '$emergency_contact');";
    
    
    $query = mysqli_query($conn, $con) or die("fuck: $con");

    echo "<script>window.location.href='employee.php'</script>";
  }
  
?>

    <div class="modal fade" id="exampleModal" tabhome="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <form method="POST">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <label for="" class="">Name</label>
                         <input name="name" type="text" class="form-control" required> <br>
                         <label for="">Address</label>
                         <input name="address" type="text" class="form-control" required> <br>
                         <label for="">Position</label>
                         <input name="position"type="text" class="form-control" required> <br>
                         <label for="">Rate</label>
                         <input name="rate" type="text" class="form-control" required> <br>
                         <label for="">Contact Number</label>
                         <input name="phonenumber"type="text" class="form-control" required> <br>
                         <label class="form-label">Sex</label>
                         <select required="" name="sex" class="form-control custom-select">
                         <option class="text-muted" value="">Select Sex</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         </select>
                         <label class="form-label mt-4" >Civil Status</label>
                         <select required="" name="civil_status" class="form-control custom-select">
                         <option class="text-muted" value="">Select Civil Status</option>
                         <option value="Single">Single</option>
                         <option value="Married">Married</option>
                         <option value="Separated">Separated</option>
                         </select>
                         <label class="form-label mt-4">Person to be contacted in case of emergency</label>
                         <input name="emergency_name" type="text" class="form-control" required placeholder="Enter name details...">
                         <label class="form-label mt-4">His/her contact details</label>
                        <input name="emergency_contact" type="number" maxlength="11" min="0" onkeypress="limitKeypress(event,this.value,11)" class="form-control" required placeholder="Enter contact details...">    
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        <button name="save" type="submit" class="btn btn-dark">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
                <?php require_once('scripts.php') ?>

