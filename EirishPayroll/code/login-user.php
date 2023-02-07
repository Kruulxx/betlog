<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        form i {
            position: absolute;
            margin-left: -30px;
            cursor: pointer;
            right: 30px;
            top: 263px;
            margin-right: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login</h2>
                    <p class="text-center">Please enter your email and password to continue.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter your Email Address" required value="<?php echo $email ?>">
                    </div>
                
                    <div class="form-group">
                    <label>Password </label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password" required>
                        <i class=" bi bi-eye-slash-fill" id="togglePassword"></i>
      
                    </div>

                   
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    
                    <div class="link login-link text-center">Don't have an account ? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
   
    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>
</body>
</html>

