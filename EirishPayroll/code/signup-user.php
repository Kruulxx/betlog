<?php 
require_once "controllerUserData.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Sign up</h2>
                    <p class="text-center">Please fill this form to register</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                    <label>Username</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your username" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                    <label>Email Address</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter your Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password" required>

                    </div>
                    <div class="form-group">
                    <label>Confirm Password</label>
                        <input class="form-control" type="password" name="cpassword" id="cpass" placeholder="Confirm your password" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Create new account">
                    </div>
                    <div class="link login-link text-center">Already a member ? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>