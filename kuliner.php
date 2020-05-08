    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/kuliner.css">


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
                        <a class="nav-link" href="user/sign_in.html"><i class="fa fa-users"></i> Kontributor</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->

        </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div id="kuliner" class="view">

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

            <!--Section: Kuliner-->
            <section id="culinary" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Kategori Makanan</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <a href="" title="">
                        <div class="card bg-dark text-white">
                          <img class="card-img image-kuliner" src="img/unnamed.jpg" alt="Card image">
                          <div class="card-img-overlay">
                            <br>
                            <br>
                            <h5 class="card-title">Jepang</h5>
                          </div>
                        </div>
                        </a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <a href="" title="">
                        <div class="card bg-dark text-white">
                          <img class="card-img image-kuliner" src="img/unnamed.jpg" alt="Card image">
                          <div class="card-img-overlay">
                            <br>
                            <br>
                            <h5 class="card-title">Korea</h5>
                          </div>
                        </div>
                        </a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <a href="" title="">
                        <div class="card bg-dark text-white">
                          <img class="card-img image-kuliner" src="img/unnamed.jpg" alt="Card image">
                          <div class="card-img-overlay">
                            <br>
                            <br>
                            <h5 class="card-title">China</h5>
                          </div>
                        </div>
                        </a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <a href="" title="">
                        <div class="card bg-dark text-white">
                          <img class="card-img image-kuliner" src="img/unnamed.jpg" alt="Card image">
                          <div class="card-img-overlay">
                            <br>
                            <br>
                            <h5 class="card-title">Asia</h5>
                          </div>
                        </div>
                        </a>

                    </div>
                    <!--Grid column-->


                </div>
                <!--Grid row-->

            </section>
            <!--Section: Culinary-->
            <section id="culinary" class="text-left">

                <!-- Heading -->
                <br>
                <h2 class="mb-5 font-weight-bold">Kuliner Terbaik Sekitar Jakarta</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                </div>
                <!-- grid row -->
            <!--Section: Culinary-->
            <section id="culinary" class="text-left">

                <!-- Heading -->
                <br>
                <h2 class="mb-5 font-weight-bold">Kuliner Korea Sekitar Malang</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <span class="grey-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</span>
                        <br class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        <i class="fa fa-map" aria-hidden="true"> 5.5 km dari posisimu</i>

                    </div>
                    <!-- grid kolom -->
                  </div>
                    <!-- grid row -->
            <section id="culinary" class="text-left">


                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Kuliner Sekitar Malang</h2>
               <!--  <br>Kamu bisa memilih macam-macam kuliner dibawah -->


                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/sate.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                       <h4 class="my-4 font-weight-bold">Sate Madura</h4>
                       <p class="grey-text">
                       <p class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></p>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <p class="grey-text"></p>
                        <p class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></p>

                    </div>
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <p class="grey-text"></p>
                          <p class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></p>

                    </div>
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/unnamed.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Mie Gacoan</h4>
                        <p class="grey-text"></p>
                        <p class="grey-text"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></p>
                    </div>
                  </div>
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

</body>
</html>
