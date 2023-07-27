<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['email']) && isset($_POST['pass'])) {
        $email=$_POST['email'];
        $password=$_POST['pass'];
        
        
            $query="select * from where email='$email'LIMIT 1";
            $result=mysqli_query($con,$query);
            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data=mysqli_fetch_assoc($result);
                     if($user_data['pass']==$password){
                        header("location:studenthome.php");
                        exit;
                     }
                     

                     
                }
            }
            echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
        
        }
    
        else{
            echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Signin.css">
</head>
<body>
<section>
    <div class="login-box">
        <form method="post">
            <h2>Sign in</h2>
            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget Password?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have a account?<a href="Signup.php">Sign up</a></p>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</section>
    
    
</body>
</html>