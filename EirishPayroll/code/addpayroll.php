<?php
    include "connection.php";
    $days_work=$rate=$g_sal=$deduct=$n_sal=0;

if(isset($_POST['compute'])){

	$days_work=$_POST['days_work'];

	$rate=$_POST['interest_rate'];

	$g_sal=$days_work*$rate;

	$deduct=$g_sal*.1;

	$n_sal=$g_sal-$deduct;

}
?>

<div class="modal fade" id="test" tabhome="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <form method="POST" action="">	
                        <label class="form-label">Employee</label>
                        <select name="employee"  required="true" class="form-control">
                              <option  value="" class="text-muted">Select Employee</option>

                              <?php 
                              $pos = "SELECT id, name FROM employee;";
                              $res = mysqli_query($con, $pos);
                              while($row = mysqli_fetch_assoc($res)){

                              ?>
                              
                              <option value="<?php echo $row['id']  ?>"><?php echo $row['name']  ?></option>
                            <?php } ?>
                          </select>
                      </div>
                      <label for="" class="">Days</label>
                         <input name="days_work" type="text" class="form-control" value="<?=$days_work;?>" required> <br>
                      <label for="" class="">Rate per day</label>
                         <input name="interest_rate" type="text" class="form-control" value="<?=$rate;?>" required> <br>
                         
                         <div class="my-3">
                         <button type="submit" name="compute" class="btn btn-dark btn-sml">Compute Salary</button>
                         </div>

                         <p>

    Gross Salary: <?=number_format($g_sal, 2);?><br/>

    Deduction: <?=number_format($deduct, 2);?><br/>

    Net Salary: <?=number_format($n_sal, 2);?>

</p>


</p>

     </form>             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php require_once('scripts.php') ?>