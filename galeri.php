<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/galeri.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: skyblue;
  color: white;
  border: 1px solid skyblue;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
  </head>
  <body>
    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top scrolling-navbar">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">TravelingKuy</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#best-features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kuliner.php">Culinary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wisata.php">Destination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="akomodasi.php">Accommodation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artikel.php">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeri.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video.php">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact</a>
                        </li>
                    </ul>
                    <!-- Links -->

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-facebook"></i></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user/sign_in.html"><i class="fa fa-users"></i> Kontributor</a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div id="galeri" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold text-light pt-5 mb-2">TravelingKuy</h2>
                            <p class="text-light">Find your tour destination now !</p>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4 text-warning">TravelingKuy provides information on popular tourist destinations</h4>
                            <button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->
    <div class="container">
    <!-- img and text garis -->
    <br>
    <form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
   </div>
</div>
<br>
<div class="container">
            <!-- video -->
            <section id="video">
                <!-- video -->
    <div class="row" id="video">
      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>
    </div>

    <!-- grid kolom -->
    <div class="row" id="video">
      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>
    </div>
    <!-- grid kolom -->
    <div class="row" id="video">
      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 margin-video">
        <!-- 4:3 aspect ratio -->
        <div class="embed-responsive embed-responsive-4by3">
        <img class="embed-responsive-item" src="https://maritim.go.id/konten/unggahan/2016/01/GunungBromo3-1.jpg">
         </div>
         <h6 class="my-2 font-weight-bold">Sawah terindah di Indonesia, Jadi Trend Traveling</h6>
          <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> Minggu, September 08, 2019 00.00</p>
      </div>
    </div>
    <!-- gridkolom -->

      <div class="container">
      <div class="pagination" style="margin-left: 330px">
  <a href="#">&laquo;</a>
  <a href="#"class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</div>
            </section>
</div>
 <footer class="page-footer font-small unique-color-dark">

        <!-- Social buttons -->
        <div class="primary-color">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>About</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">About</a>
                    </p>
                    <p>
                        <a href="#!">Contact</a>
                    </p>
                    <p>
                        <a href="#!">Disclaimer</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home"></i></i> Bali, NY 10012, ID</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            Dikky Setiawan
        </div>
        <!-- Copyright -->

    </footer>

<!-- end container -->
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
