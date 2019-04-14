<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("db.php");
if($_SESSION['u_name'] == '' )
{
	header("location:index.php");
}
?>
	<title>Steak House - Admin Page</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  <meta name="description" content="">
	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">
  <link rel="stylesheet" href="css/hover-min.css">
  <link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
  <link type='text/css' rel="stylesheet" href="css/menu-self.css">
  <link type='text/css' rel="stylesheet" href="css/review-section.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>

<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h2 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white;">Welcome to Steak House <?php echo $_SESSION['u_name']; ?></h2>
              <p class="wow fadeInUp" data-wow-delay="1.0s">Food brings people together on many different levels.It's nourishment of the soul and body;it's truly love.</p>
              <a href="#menu" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Discover Now</a>
          </div>
      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <ul>
          <li><p><?php
          $_SESSION['u_name']
          ?></p></li>
      </ul>
      <a href="#" class="navbar-brand">Steak House</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#menu" class="smoothScroll">Menu</a></li>
        <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
        <li><a href="#reviews" class="smoothScroll">Reviews</a></li>
        <li><a href="logout.php" class="smoothScroll">Logout</a></li>
      </ul>
    </div>

  </div>
</div>

<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">
        
        <button><a href="admin_add_menu.php">Add New Menu</a></button>


      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Food Menu</h2>
            <h4>we have special menus</h4>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.6s">
          <div class="media-object pull-left">
            <img src="images/gallery-img1.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$24</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Breakfast</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/gallery-img2.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$36</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">New Pizza</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object pull-left">
            <img src="images/gallery-img3.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$24</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Mushroom</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="1s">
          <div class="media-object pull-left">
            <img src="images/gallery-img4.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$32</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Seafood</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.3s">
          <div class="media-object pull-left">
            <img src="images/gallery-img5.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$64</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Spicy Beef</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.6s">
          <div class="media-object pull-left">
            <img src="images/gallery-img6.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$45</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Dinner</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Food Gallery</h2>
            <h4>we have special foods</h4>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Breakfast</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">Pizza</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Lunch</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".dinner">Dinner</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box breakfast pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem One</h3>
                        </div>

                        <div class="iso-box breakfast lunch dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum two</h3>
                        </div>

                        <div class="iso-box dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Third Lorem ipsum</h3>
                        </div>

                        <div class="iso-box breakfast col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum fourth</h3>
                        </div>

                        <div class="iso-box lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Fifth Lorem ipsum</h3>
                        </div>

                        <div class="iso-box pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img6.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Sixth Lorem ipsum</h3>
                        </div>

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<?php
$q = "SELECT * FROM reviews";
  $ress = mysqli_query($con,$q);
?>
<!-- Reviews Section -->
<section id="reviews" class="parallax-section">
  <div class="container">
    <div class="row">
        <h3 class="review-heading"> REVIEWS </h3>
      <div class= "review-table">
      <div class="success">

   <?php
   while($row=mysqli_fetch_array($ress) )
   {
   ?>
        <p><strong class="left-text"><?php echo $row['user_name']; ?></strong>
        <?php echo $row['user_message']; ?></p>
    <?php
   }
   ?>
      
      </div>
      </div>
    </div>
  </div>





  <!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2019 Steak House Company<a class="designed-by" href="#" target="_blank"></a></p>
      </div>  
      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>
    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>