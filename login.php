<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body{
      background-image: url('background.jpg');
      background-size: cover;

    }
        form{
          margin-top: 8em;
          margin-left: 30em;
          margin-right: 10em;
          padding: 30px;
          box-shadow: 10px 10px 8px 10px #888888;
          background-color: white;
        }
    </style>
  </head>
  <body>
     <div class="container">
       <form method="post">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
           </div>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" name="password">
           </div>
           <button type="submit" class="btn btn-primary" name="Login">Submit</button>
           <p style="text-align: center;">
             New User?<br>
             Create Account <a href="register.php">Sign Up</a>
           </p>

        </form>
     </div>
  </body>
</html>
