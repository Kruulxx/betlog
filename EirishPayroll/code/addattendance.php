<?php
    include "connection.php";
?>

<div class="modal fade" id="add-attendance" tabhome="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
                      
        </div>
      
         <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
           <button name="save" type="submit" class="btn btn-dark">Save</button>
         </div>
    </div>
  </div>
</div>

<?php require_once('scripts.php'); ?>
