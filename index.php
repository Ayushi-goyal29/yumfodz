<?php
	require './includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Basic -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <!-- Site Metas -->
    <title>Yummfoodz</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>
    <!-- Start header -->
    <header class="top-navbar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbars-rs-food"
            aria-controls="navbars-rs-food"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbars-rs-food">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactus">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign-Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End header -->

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
      <ul class="slides-container">
        <li class="text-center">
          <img src="images/slider-01.jpg" alt="" />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>
                  <strong
                    >Welcome To <br />
                    Yummfoodz</strong
                  >
                </h1>
                <p class="m-b-40">
                  Food brings people together on many different levels.
                  <br />
                  Eat Healthy, Stay Healthy :)
                </p>
                <p>
                  <a
                    class="btn btn-lg btn-circle btn-outline-new-white"
                    href="menu.php"
                    >Explore Menu</a
                  >
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="text-right">
          <img
            src="https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80"
            alt=""
          />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>
                  <strong
                    >Welcome To <br />
                    Yummfoodz</strong
                  >
                </h1>
                <p class="m-b-40">
                  Food brings people together on many different levels.
                  <br />
                  Eat Healthy, Stay Healthy :)
                </p>
                <p>
                  <a
                    class="btn btn-lg btn-circle btn-outline-new-white"
                    href="menu.php"
                    >Explore Menu</a
                  >
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="text-left">
          <img src="images/slider-02.jpg" alt="" />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>
                  <strong
                    >Welcome To <br />
                    Yummfoodz</strong
                  >
                </h1>
                <p class="m-b-40">
                  Food brings people together on many different levels.
                  <br />
                  Eat Healthy, Stay Healthy :)
                </p>
                <p>
                  <a
                    class="btn btn-lg btn-circle btn-outline-new-white"
                    href="menu.php"
                    >Explore Menu</a
                  >
                </p>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="slides-navigation">
        <a href="#" class="next"
          ><i class="fa fa-angle-right" aria-hidden="true"></i
        ></a>
        <a href="#" class="prev"
          ><i class="fa fa-angle-left" aria-hidden="true"></i
        ></a>
      </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <a name="Services"></a>
    <div id="" class="Our">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage">
              <h2>Our Services Includes</h2>
              <span>We are glad to provide these services to you.</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="Our_box">
              <i><img src="images/service1.png" alt="#" /></i>
              <h4>No-Minimum Order</h4>
              <p>
                Order in for yourself or for the group, with no restrictions on
                order value you just order and enjoy..
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="Our_box">
              <i><img src="images/service2.png" alt="#" /></i>
              <h4>Live Order Tracking</h4>
              <p>
                Know where your order is at all times, from the restaurant to
                your doorstep. Track by sitting at yor place...
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="Our_box">
              <i><img src="images/service3.png" alt="#" /></i>
              <h4>Free-Fast Delivery</h4>
              <p>
                 Experience superfast delivery for food delivered fresh & on time.
                 Don't forget to give your valueable feedback .. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-left">
            <p class="lead">
              " Cooking is an art, but all art requires knowing something about
              the techniques and materials. Using modernist techniques, you get
              more control, and that allows you to be more artistic, not less! "
            </p>
            <center><span class="lead"> - Nathan Myhrvold</span></center>
          </div>
        </div>
      </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="menu-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-title text-center">
              <h2>Special Menu</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="special-menu text-center">
              <div class="button-group filter-button-group">
                <button class="active" data-filter="*">All</button>
                <button data-filter=".beverages">Beverages</button>
                <button data-filter=".indian">Indian</button>
                <button data-filter=".chinese">Chinese</button>
                <button data-filter=".deserts">Deserts</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row special-list">
          <div class="col-lg-4 col-md-6 special-grid beverages">
            <div class="gallery-single fix">
              <img src="images/img-01.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>POMEGRANATE</h4>
                <p>Nourishing bowl for the soul .</p>
                <h5>Rs. 40</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid beverages">
            <div class="gallery-single fix">
              <img src="images/img-02.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Water Melon Juice</h4>
                <p>Don't let the seed to stop you.</p>
                <h5>Rs. 80</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid beverages">
            <div class="gallery-single fix">
              <img src="images/cappi.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Cappuccino</h4>
                <p>Life happends, Cappuccino helps.</p>
                <h5>Rs. 90</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid indian">
            <div class="gallery-single fix">
              <img src="images/dosa.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Stuffed Dosa</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 125</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid indian">
            <div class="gallery-single fix">
              <img src="images/panneer.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Kadai Paneer</h4>
                <p>First and Forever choice of everyone</p>
                <h5>Rs. 250</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid indian">
            <div class="gallery-single fix">
              <img src="images/kofte.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Dry Kofte</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 175</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid chinese">
            <div class="gallery-single fix">
              <img src="images/img-04.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Combo Burger Pack</h4>
                <p>Meat or veggie, all burgers are beautiful</p>
                <h5>Rs. 399</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid chinese">
            <div class="gallery-single fix">
              <img src="images/chicken.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>TSO Chicken</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 350</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid chinese">
            <div class="gallery-single fix">
              <img src="images/chowmin.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Chow-Mein</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 150</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid deserts">
            <div class="gallery-single fix">
              <img
                src="images/Strawberry-desserts-wallpaper-HD.jpg"
                class="img-fluid"
                alt="Image"
              />
              <div class="why-text">
                <h4>Strawberry desserts</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 200</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid deserts">
            <div class="gallery-single fix">
              <img
                src="images/gulab-jamuns.jpg"
                class="img-fluid"
                alt="Image"
              />
              <div class="why-text">
                <h4>Gulab Jamunn</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 150</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 special-grid deserts">
            <div class="gallery-single fix">
              <img src="images/vanilla.jpg" class="img-fluid" alt="Image" />
              <div class="why-text">
                <h4>Vanilla Waffels</h4>
                <p>Sed id magna vitae eros sagittis euismod.</p>
                <h5>Rs. 200</h5>
                <a href="menu.php"><button>Order now -></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Menu -->

    <!-- Start Gallery -->
    <div class="gallery-box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-title text-center">
              <h2>Food Gallery</h2>
            </div>
          </div>
        </div>
        <div class="tz-gallery">
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-01.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-01.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-02.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-02.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-03.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-03.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-04.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-04.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-05.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-05.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <a class="lightbox" href="images/gallery-img-06.jpg">
                <img
                  class="img-fluid"
                  src="images/gallery-img-06.jpg"
                  alt="Gallery Images"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    <div class="customer-reviews-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-title text-center">
              <h2>Famous Returants</h2>
              <p>Click on the image to visit their websites</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto text-center">
            <div id="reviews" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner mt-4">
                <div class="carousel-item text-center active">
                  <div class="img-box p-1 border rounded-circle m-auto">
                    <a
                      href="https://indianaccent.com/newdelhi/index.php"
                      target="_blank"
                      ><img
                        class="d-block w-100 rounded-circle"
                        src="images/restraunt1.jpg"
                        alt=""
                    /></a>
                  </div>
                  <h5 class="mt-4 mb-0">
                    <strong class="text-warning text-uppercase"
                      >Indian Accent</strong
                    >
                  </h5>
                  <h6 class="text-dark m-0">The showcase of Indian cuisine</h6>
                  <p class="m-0 pt-3">
                    Indian Accent has been featured in the World's 50 Best
                    Restaurants 2019. It has been awarded the San Pellegrino
                    Best Restaurant Award in India by Asia's 50 Best Restaurants
                    2021 for the Seventh consecutive year. It has also been
                    rated as the No.1 Restaurant in India by TripAdvisor
                    consistently from 2014 - 2019. Indian Accent has been
                    awarded the Number 1 Restaurant in India by Condé Nast
                    Traveller and Himalayan Sparkling Top Restaurant Awards.
                  </p>
                </div>

                <div class="carousel-item text-center">
                  <div class="img-box p-1 border rounded-circle m-auto">
                    <a href="https://peshawrirestaurant.com/" target="_blank"
                      ><img
                        class="d-block w-100 rounded-circle"
                        src="images/restraunt2.jpg"
                        alt=""
                    /></a>
                  </div>
                  <h5 class="mt-4 mb-0">
                    <strong class="text-warning text-uppercase"
                      >Peshawari</strong
                    >
                  </h5>
                  <h6 class="text-dark m-0">
                    Devour the delicious North Indian cuisine
                  </h6>
                  <p class="m-0 pt-3">
                    The word 'Peshawari' in Hindi means "melodious poem" and the
                    cuisine echoes this sentiment. <br />
                    Landing in Brooklyn with nothing more than a small suitcase
                    and a love of food, Bablu found her very first her culinary
                    love to feed the world at large.
                  </p>
                </div>

                <div class="carousel-item text-center">
                  <div class="img-box p-1 border rounded-circle m-auto">
                    <a
                      href="https://gulatirestaurant.co/order-online/"
                      target="_blank"
                      ><img
                        class="d-block w-100 rounded-circle"
                        src="images/restraunt3.jpg"
                        alt=""
                    /></a>
                  </div>
                  <h5 class="mt-4 mb-0">
                    <strong class="text-warning text-uppercase"
                      >Gulati Restaurant</strong
                    >
                  </h5>
                  <h6 class="text-dark m-0">
                    The quest for creating a better dining experience
                  </h6>
                  <p class="m-0 pt-3">
                    Gulati Restaurant is a hotspot for many Delhiites who want
                    to have the real taste of Mughlai and Tandoori cuisines. The
                    restaurant is known not just for the authentic food it
                    serves but also for the culinary art of using around 200
                    masalas, traditional cooking techniques and warm
                    hospitality. So when we visited this popular restaurant in
                    the heart of Delhi, we understood why it has managed to
                    attract so many people for more than a decade.
                  </p>
                </div>
              </div>

              <a
                class="carousel-control-prev"
                href="#reviews"
                role="button"
                data-slide="prev"
              >
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#reviews"
                role="button"
                data-slide="next"
              >
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Customer Reviews -->
    <a name="contactus"></a>
    <!-- Start Contact info -->
    <div class="contact-imfo-box">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-volume-control-phone"></i>
            <div class="overflow-hidden">
              <h4>Phone:</h4>
              <p class="lead">+91-78459-85742</p>
            </div>
          </div>
          <div class="col-md-4">
            <i class="fa fa-envelope"></i>
            <div class="overflow-hidden">
              <h4>Email:</h4>
              <p class="lead">yummfoodz@gmail.com</p>
            </div>
          </div>
          <div class="col-md-4">
            <i class="fa fa-map-marker"></i>
            <div class="overflow-hidden">
              <h4>Address:</h4>
              <p class="lead">Near Chandigarh University</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <center><h3>About Us</h3></center>
            <p>
              It is a simple food ordering website designed keeping in mind the
              pandemic situations going on. The food is completely hygienic and
              full of taste. You can visit to our
              <a href="menu.php"> Menu Page</a> to visit complete catelog and
              order to stisfy you hunger. Hopes you all like it.
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <center><h3>Catelog</h3></center>
            <center>
              <p><span class="text-color">Fast Food </span></p>
            </center>
            <center>
              <p><span class="text-color">Indian</span></p>
            </center>
            <center>
              <p><span class="text-color">Chinese</span></p>
            </center>
            <center>
              <p><span class="text-color">Beverages</span></p>
            </center>
            <center>
              <p><span class="text-color">Deserts</span></p>
            </center>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Contact information</h3>
            <p class="lead">Near Chandigarh University</p>
            <p class="lead"><a href="#">+91-78459-85742</a></p>
            <p><a href="#">yummfoodz@gmail.com</a></p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Subscribe</h3>
            <div class="subscribe_form">
              <form class="subscribe_form">
                <input
                  name="EMAIL"
                  id="subs-email"
                  class="form_input"
                  placeholder="Email Address..."
                  type="email"
                />
                <button type="submit" class="submit">SUBSCRIBE</button>
                <div class="clearfix"></div>
              </form>
            </div>
            <ul class="list-inline f-social">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/"
                  ><i class="fa fa-twitter" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/"
                  ><i class="fa fa-youtube-play" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://myaccount.google.com/u/0/profile"
                  ><i class="fa fa-google-plus" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p class="company-name">
                All Rights Reserved. &copy; 2021
                <a href="#">Yummfoodz </a> Design By : Ayushi , Archana ,
                Sarthak
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none"
      >&uarr;</a
    >


    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
