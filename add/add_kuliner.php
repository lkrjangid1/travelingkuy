<?php include 'upload.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

    <div class="col">
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link" href="../index.php">Home</a>
        <a class="nav-item nav-link" href="../kuliner.php">Kuliner</a>
        <a class="nav-item nav-link" href="../wisata.php">Wisata</a>
        <a class="nav-item nav-link" href="../akomodasi.php">Akomodasi</a>
        <a class="nav-item nav-link" href="../artikel.php">Artikel</a>
        <a class="nav-item nav-link" href="../galeri.php">Galeri</a>
        <a class="nav-item nav-link" href="../video.php">Video</a>
      </nav>
      </div>
      <br>
      <!-- add data to kuliner -->
      <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Nama Kuliner</label>
    <input type="text" class="form-control" name="namaKuliner" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="descSingkat">Deskripsi Singkat</label>
    <input type="text" class="form-control" name="descSingkat" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="descLengkap">Deskripsi Lengkap</label>
    <!-- <input type="text" class="form-control" name="descLengkap" placeholder="Another input"> -->
    <textarea class="form-control" name="descLengkap" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="alamat">Alamt Kuliner</label>
    <input type="text" class="form-control" name="alamat" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="jamBuka">Jam Buka</label>
    <input type="text" class="form-control" name="jamBuka" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="noTelepon">No. Telepon</label>
    <input type="text" class="form-control" name="noTelepon" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="website">Website Info</label>
    <input type="text" class="form-control" name="website" placeholder="Another input">
  </div>
    <input type="file" name="myfile">
          <button class="btn btn-primary" type="submit" name="save">upload</button>
</form>
<br>


  <!-- add data  -->
<!-- end container -->
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>