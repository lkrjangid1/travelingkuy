<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'traveling');

$sql = "SELECT * FROM kuliner";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../img/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'PNG', 'JPG', 'JPEG'])) {
        // echo "You file extension must be .zip, .pdf or .docx";
        echo "<html>
    <head>
    </head>
    <body>
      <meta http-equiv='REFRESH' content='0 ; url=add_kuliner.php'>
      <script>
        alert('You file extension must be .jpg, .png, .jpeg');
      </script>
    </body>
        </html>";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
      // compressImage($file, $destination, 60);
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
          // compress image
            compressImage($file, $destination, 60);
            //upload to server
            $nama_kuliner = $_POST['namaKuliner'];
      $desc_Singkat = $_POST['descSingkat'];
      $desc_Lengkap = $_POST['descLengkap'];
      $alamatKuliner = $_POST['alamat'];
      $jam_buka = $_POST['jamBuka'];
      $no_telepon = $_POST['noTelepon'];
      $websiteKuliner = $_POST['website'];

            $sql = "INSERT INTO kuliner (nama_kuliner, desc_singkat,desc_lengkap,alamat,jam_buka,no_telepon,website,image) VALUES ('$nama_kuliner','$desc_Singkat','$desc_Lengkap','$alamatKuliner','$jam_buka','$no_telepon','$websiteKuliner','$filename')";
            if (mysqli_query($conn, $sql)) {
                // echo "File uploaded successfully";

                echo "<html>
    <head>
    </head>
    <body>
      <meta http-equiv='REFRESH' content='0 ; url=add_kuliner.php'>
      <script>
        alert('The data has been uploaded .');
      </script>
    </body>
        </html>"; 
            }
        } else {
            echo "<html>
    <head>
    </head>
    <body>
      <meta http-equiv='REFRESH' content='0 ; url=add_kuliner.php'>
      <script>
        alert('failed to upload file');
      </script>
    </body>
        </html>"; 
        }
    }
}

// compress image
function compressImage($source, $destination, $quality) {

  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') {
    ini_set('memory_limit', '-1');
    $image = imagecreatefromjpeg($source);

  } elseif ($info['mime'] == 'image/gif') {
    $image = imagecreatefromgif($source);
  } elseif ($info['mime'] == 'image/png') {

    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);
}

}