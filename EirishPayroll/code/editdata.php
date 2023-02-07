<?php 
require_once('connection.php');
extract($_POST);

$update = $con->query("UPDATE `authors` set `first_name` = '{$first_name}', `last_name` = '{$last_name}', `email` = '{$email}',`birthdate` = '{$birthdate}' where id = '{$id}'");
if($update){
    $resp['status'] = 'success';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: '.$con->error;
}

echo json_encode($resp);

?>

<div class="modal fade" id="edit_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Author's Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="edit-author-frm">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="first_name" class="control-label">First Name</label>
                                <input type="text" class="form-control rounded-0" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="control-label">Last Name</label>
                                <input type="text" class="form-control rounded-0" id="last_name" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control rounded-0" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="control-label">Date of Birth</label>
                                <input type="date" class="form-control rounded-0" id="birthdate" name="birthdate" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit-author-frm">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    