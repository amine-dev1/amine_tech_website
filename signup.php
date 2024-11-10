<?php
include 'connection.php';

if (isset($_POST['sign_up'])) {
   $first_name = $_POST['first_name'];
   $second_name = $_POST['second_name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];

   if (empty($first_name) || empty($second_name) || empty($email) || empty($phone) || empty($password)) {
       echo "Please fill in all fields.";
   } else {
       $first_name = $connection->real_escape_string($first_name);
       $second_name = $connection->real_escape_string($second_name);
       $email = $connection->real_escape_string($email);
       $phone = $connection->real_escape_string($phone);
       $password = $connection->real_escape_string($password);

       $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

       $request = "INSERT INTO users (first_name, second_name, number, mail, password) 
                   VALUES ('$first_name', '$second_name', '$phone', '$email', '$hashedPassword');";

       $result = mysqli_query($connection, $request);
       if ($result === false) {
           echo "User not added to the table. We are sorry for that.";
       } 
   }
   
   $connection->close();
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <title>Amine Tech </title>
   </head>
   <style>
      <?php include 'css/newproj.css'?>
   </style> 
   <body class="login_body" >
      <div class="signup-form">
         <div class="text">
            SIGN UP
         </div>
         <form method="post">
            <div class="field">
             <input type="text" placeholder="First name " name="first_name">
            </div>
            <div class="field">
              <input type="text" placeholder="Second Name " name="second_name">
            </div>
            <div class="field">
               <input type="email" placeholder="Email" name="email">
            </div>
            <div class="field">
               <input type="tel" placeholder="number" name="phone">
            </div>
            <div class="field">
               <input type="password" placeholder="Password" name="password">
            </div>
            <input name="sign_up" class="button" type="submit" name="sign_up" value="SIGN UP">
         </form>
      </div>
   </body>
</html>