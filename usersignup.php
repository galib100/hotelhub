<?php
 include 'db.php';
// $con = mysqli_connect("localhost", "root", "", "hotelhub");


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = md5(mysqli_real_escape_string($con,$_POST['password']));
    $confirmPassword = md5(mysqli_real_escape_string($con,$_POST['confirmPassword']));

    $s = " SELECT * FROM signup WHERE 'email' = '$email'";
   
     $result = mysqli_query($con,$s); 
     $num = mysqli_num_rows($result);
     if($num==1){
         $error="email is already taken";
     }else{
        if($password !=$confirmPassword){
            $error="!!Password doesn't match!!";
        }else {
            $reg = " INSERT INTO signup(name , email , password) VALUES('$name','$email','$password')";
           $res = mysqli_query($con,$reg);
           if(!$res){
               $error = "something wrong";
           }
           else{
            $error = "Sign up successfully";
            // header('Location: userlogin.php');
            echo "<script> alert('Hey $name you are successfully signup!!') </script>";

           }

}
     }
     
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 offset-md-4 form">
                <form action="" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Signup">
                    </div>
                    <h5 class="text-danger text-center">
                        <?php
                        echo $error;
                        ?>
                    </h5>
                    <div class="link login-link text-center">Already a member? <a href="userlogin.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

