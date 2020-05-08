<?php
// validasi users
function validateUser($username,$password){
  session_start();
  include '../db/config.php';
    $sql = "SELECT * FROM user where username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // var
    $linkFalse = "<script>window.alert('Username atau Password Anda salah')</script>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          // echo $link;
          // set session
          $_SESSION["login"] = true;
          header("location: ../admin/sb-admin/dist/index.php");
          exit;
      }
    } else {
      echo $linkFalse;
    }
    $conn->close();
  }
  // register users
  function insertRegisterUser($username,$password,$nama,$email){
    include '../db/config.php';
    $sql = "INSERT INTO user (nama, username,password,email) VALUES ('$nama','$username','$password','$email')";
    if (mysqli_query($conn, $sql)) {
      echo "<html>
              <head>
              </head>
              <body>
                <meta http-equiv='REFRESH' content='0 ; url=../user/login.php'>
                <script>
                  alert('Success');
                </script>
              </body>
            </html>";
    }
  }
 ?>
