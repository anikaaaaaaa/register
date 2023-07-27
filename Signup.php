<?php
    session_start();
    $con=mysqli_connect("localhost","root","","facultyproject") or die(mysqli_connect_error());
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['Pnum'];
        $password=$_POST['pass'];
        if (!empty($email) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $query="insert into signup(fname,lname,email,Pnum,pass) values('$firstname','$lastname','$email','$phone','$password')";
            mysqli_query($con,$query);
            
            echo"<script type='text/javascript'>alert('Successfully register')</script>";
        }
        else{
            echo"<script type='text/javascript'>alert('Please enter valid information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<section>
    <div class="signup">
        <h2>Signup</h2>
        <form method="post">
       
            <label >First name</label>
            <input type="text" name="fname" required>
            <label >Last name</label>
            <input type="text" name="lname" required>
       
            <label >Email</label>
            <input type="text" name="email" required>
            <label >Phone number</label>
            <input type="tel" name="Pnum" required>
            <label >Password</label>
            <input type="text" name="pass" required>
            <p>By clicking,Submit you agree to Bracu Faculty Review's <a href="#">Terms and conditions</a> and <a href="#">Privacy policy</a></p>
            <input type="submit" name="" value="Submit">

           
        </form>
        <div class="have-account">
            <p>Already have a account?<a href="login.php">Sign in </a></p>
        </div>
    </div>
    

</section>
</body>
</html>