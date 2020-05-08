<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/cssku.css">
    <style media="screen">
      .bg-login{
        background: white;
        opacity: 90%;
      }
    </style>
  </head>
  <body id="intro">
    <br>
    <div class="container">
      <!-- grid row -->
      <div class="row justify-content-center">
        <!-- grid col -->
        <div class="col-md-6 bg-login">
          <form  action="sign_up.php" method="post">
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="nama" aria-describedby="nama" placeholder="Enter Name" required>
              <small id="emailHelp" class="form-text text-muted">Kami tidak pernah membagikan email dan password Anda.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
              <small id="emailHelp" class="form-text text-muted">Kami tidak pernah membagikan email dan password Anda.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Enter username" required>
              <small id="emailHelp" class="form-text text-muted">Kami tidak pernah membagikan email dan password Anda.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Daftar</button>
            <br>
            <a href="sign_up.php">Sudah mempunyai akun? Login</a>
            <hr>
            <p align="center">Atau</p>
            <hr>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Masuk dengan Google</button>
      </form>
      <?php
      include '../logic/function.php';
      if(isset($_POST["username"]) && isset($_POST["username"]) && isset($_POST["nama"]) && isset($_POST["email"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $name = $_POST["nama"];
        $email = $_POST["email"];
        insertRegisterUser($user,$pass,$name,$email);
      }
      ?>
      <br>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>

  </body>
</html>
