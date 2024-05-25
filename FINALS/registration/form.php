<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Blog Form </title>
    <link rel="stylesheet" href="form_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav class="navbar">
    <div class="logo"><a href="../landing_page/landing_page.html"><img src="../main/hasten-high-resolution-logo-transparent.png" alt="Baguio"></a></div>
    <a href="./form.php" style="margin-top: 1rem;" class="login">Login</a>
  </nav>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../images/forms.jpg" alt="">
        <div class="text">
          <span class="text-1">Experience the chill of <br> Baguio City</span>
          <span class="text-2">Discover new places</span>
        </div>
      </div>
      <div class="back">
        <img src="../images/forms.jpg" alt="">
        <div class="text">
          <span class="text-1">Begin your journey in the <br> City of Pines</span>
          <span class="text-2">Adventure awaits</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
         <form action="#" method="post">
          <?php include('errors.php'); ?>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your username" >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" >
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Login" name="login_user">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
      
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="" method="post">
        <?php include('errors.php'); ?>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your username">
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_1" placeholder="Enter your password" >
              </div>
              <div class="input-box">
                <i class="fas fa-check"></i>
                <input type="password" name="password_2" placeholder="Confirm your password" >
              </div>
              <div class="button input-box">
                <input type="submit" name="reg_user" value="Register">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>