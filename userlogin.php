 <?php
    include 'db.php';
    ob_start();
session_start();
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($con, strtolower($_POST['email']));
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));
        // $uName = "SELECT name FROM signup WHERE email='$email' AND password = '$password' ";
        $sql = "SELECT * FROM signup WHERE email='$email' AND password = '$password' ";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            // echo "<script> alert('Hey $uName you are successfully login!!') </script>";
            header('Location: index1.php');
        } else {
            $error = " !! Wrong Eamil or Password !!";
        }
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <title>Login Form</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
 </head>

 <body>
     <div class="container">
         <div class="row py-5 my-5">
             <div class="col-md-4 offset-md-4 form login-form">
                 <form action="" method="POST" autocomplete="">
                     <h2 class="text-center">Login Form</h2>
                     <p class="text-center">Login with your email and password.</p>
                     <div class="form-group">
                         <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                     </div>
                     <div class="form-group">
                         <input class="form-control" type="password" name="password" placeholder="Password" required>
                     </div>
                     <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <h5 class="text-danger text-center">
                        <?php
                            if (isset($error)) {
                                echo "$error";
                            }
                        ?>
                    </h5>
                   
                     <div class="form-group">
                         <input class="form-control button" type="submit" name="submit" value="Login">
                     </div>
                     <div class="link login-link text-center">Not yet a member? <a href="usersignup.php">Signup now</a></div>
                 </form>
             </div>
         </div>
     </div>

 </body>

 </html>