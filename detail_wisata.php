<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/cssku.css">
</head>
<body>
<!-- firebase -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
 https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
// Your web app's Firebase configuration
var firebaseConfig = {
apiKey: "AIzaSyCgM6sL7E6M-XfZi2MZjfrDcj0lTZxYyLU",
authDomain: "crud-firebase-943d6.firebaseapp.com",
databaseURL: "https://crud-firebase-943d6.firebaseio.com",
projectId: "crud-firebase-943d6",
storageBucket: "crud-firebase-943d6.appspot.com",
messagingSenderId: "965782887428",
appId: "1:965782887428:web:5b32e57c12b2bcef0aa951"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
</script>
<!-- end firebase -->

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
                        <a class="nav-link" href="#intro">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#culinary">Culinary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destination">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="akomodasi.php">Accommodation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#video">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
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
                      <!-- <i class="fa fa-users"></i> Kontributor</a> -->
                        <a class="nav-link" href="http://localhost/travelingkuy/user/login.php" target="_blank"><i class="fa fa-users"></i> Kontributor</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->

        </div>

    </nav>
    <!--/.Navbar-->

    <!-- Modal login -->
      <div id="mylogin" class="modal fade" role="dialog">
      <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Masuk Sebagai Kontributor</h4>
      </div>
      <div class="modal-body">
          <form action="index.php" method="post">
          <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <input type="submit" name="" value="">
          </div>
          </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal" name="submit">Masuk</button>

      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </div>
      </div>
      </div>
    <!-- End Modal Login -->

    <!--Mask-->
    <div id="intro" class="view">

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

<!--Main layout-->
<main class="mt-5">
    <div class="container">

        <hr class="my-5">

        <!--Section: detail-->
        <section id="gallery">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                                    alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                    alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                    alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <h4 class="mb-3"><strong>Bali</strong></h4>
                    <h6>Overview</h6>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                        quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                        officiis
                        debitis aut rerum.</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <br>
                    <i class="fa fa-clock-o fa-1x" aria-hidden="true"> Open: 12:00 AM - 11:59 PM</i>
                    <br>
                    <i class="fa fa-map-marker fa-1x" aria-hidden="true"> Address: Legian Village, Legian Indonesia </i>
                    <br>
                    <p>by <a><strong>Dikky16</strong></a>, 11/03/2020</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: detail-->

        <!--Section: destination-->
        <section id="destination" class="text-center">

          <div class="row">
            <div class="col-md-4">
              <!-- Heading -->
              <h2 class="mb-5 font-weight-bold">Populer Wisata</h2>
            </div>
            <div class="col-md-3 ml-md-auto">
              <br>
              <a href="wisata.php"><h6>Lihat Semuanya</h6></a>
            </div>
          </div>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Bali</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>
                </div>

                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Lombok</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Yogyakarta</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Malang</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/11.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Blitar</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Solo</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam,
                        aperiam minima
                        assumenda deleniti hic.</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Examples-->

        <hr class="my-5">

        <!--Section: Gallery-->
        <section id="gallery">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Gallery</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                                    alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                    alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                    alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <!--Excerpt-->
                    <a href="" class="teal-text">
                        <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
                    </a>
                    <h4 class="mb-3"><strong>This is title of the news</strong></h4>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                        quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                        officiis
                        debitis aut rerum.</p>

                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                        quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                        officiis
                        debitis aut rerum.</p>
                    <p>by <a><strong>Dikky16</strong></a>, 11/03/2020</p>

                    <a class="btn btn-primary btn-md" href="galeri.php">Read more</a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Gallery-->

        <hr class="my-5">
        <!-- video -->
        <section id="video">
            <!-- video -->
<div class="row" id="video">
  <div class="col-lg-3 col-md-6 mb-4 margin-video">
    <!-- 4:3 aspect ratio -->
    <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/204O_xorrHk"></iframe>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4 margin-video">
    <!-- 4:3 aspect ratio -->
    <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/204O_xorrHk"></iframe>
    </div>
  </div>

<div class="col-lg-3 col-md-6 mb-4 margin-video">
    <!-- 4:3 aspect ratio -->
    <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/204O_xorrHk"></iframe>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4 margin-video">
    <!-- 4:3 aspect ratio -->
    <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/204O_xorrHk"></iframe>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="right-btn">
      <a class="btn btn-primary btn-md" href="video.php">Read more</a>
    </div>
  </div>
        </section>
        <!-- video -->

        <hr class="my-5">
        <!--Section: Contact-->
        <section id="contact">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 col-md-12">
                    <!-- Form contact -->
                    <form class="p-5 grey-text">
                        <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                            <input type="text" id="form3" class="form-control form-control-sm">
                            <label for="form3">Your name</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control form-control-sm">
                            <label for="form2">Your email</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                            <input type="text" id="form32" class="form-control form-control-sm">
                            <label for="form34">Subject</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                            <label for="form8">Your message</label>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                    <!-- Form contact -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 col-md-12">


                    <!--Google map-->
                    <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px"></div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Contact-->

    </div>
</main>
<!--Main layout-->

<!-- Footer -->
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
<!-- Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="js/javascript.js"></script>

<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
