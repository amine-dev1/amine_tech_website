<?php 

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Amine Tech</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <style>
    <?php include 'css/newproj.css';?>
   </style>
   <body class="login_body">
      <div class="login-form">
         <div class="text">
            LOGIN
         </div>
         <form method="post">
            <div class="field">
               <input type="text" placeholder="Email or Phone" name="email">
            </div>
            <div class="field">
               <input type="password" placeholder="password" name="password">
            </div>
            <input name="submit-btn" class="button" type="submit" value="LOGIN">
            <div class="link">
               Not a member?
               <a href="signup.php">Signup now</a>
            </div>
         </form>
         </p>
      </div>
   </body>
</html>