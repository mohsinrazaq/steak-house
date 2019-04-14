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

	<title>Steak House - Admin Add Menu Page</title>
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
  <link rel="stylesheet" href="css/menu-add-table.css">
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
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Steak House</h1>
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
      <a href="#" class="navbar-brand">Steak House</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#menu" class="smoothScroll">Menu</a></li>
        <li><a href="logout.php" class="smoothScroll">Logout</a></li>
      </ul>
    </div>
  </div>
</div>




<!-- Menu section -->
<section id="menu" class="parallax-section" Style="padding-bottom:0px;">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Food Menu</h2>
            <h4>we have special menus</h4>
        </div>
      </div>
</section>

<?php
if(isset($_POST['add']))
{
    $a= $_POST['item-name'];
    $b= $_POST['item-category'];
    $c= $_POST['item-quantity'];
    $q = "INSERT INTO items (item_name,item_category,item_quantity) VALUES
     ('$a','$b','$c')";
    $res=mysqli_query($con,$q);
}
?>


<table class="menu-add-table">
      <tr>
        <td> Item Name </td>
        <td>Category</td>
        <td>Quantity</td>
      </tr>
      <tr>  
            <form action="admin_add_menu.php" method="post">
                <td>  <input type="text" name="item-name">    </input> </td>
                <td>  <input type="text" name="item-category"></input> </td>
                <td>  <input type="text" name="item-quantity"></input> </td>   
                <td><button name="add">ADD MENU</button></td>
            </form>  
      </tr>
</table>
<div class="items-avail">
<h3 style='text-align:center;'>ITEMS AVAILABLE</h3>
<?php
    $q2 = "SELECT * FROM items";
    $res2=mysqli_query($con,$q2);
?>
<table>
    <tr>
        <td> Item Name</td>
        <td>Item Category</td>
        <td>Quantity</td>
    </tr>

    <?php
        while($row2=mysqli_fetch_array($res2) )
        {
    ?>
        <tr>
    	    <td> <?php echo $row2['item_name'] ; ?> </td>
            <td> <?php echo $row2['item_category'] ; ?>	</td>
            <td> <?php echo $row2['item_quantity'] ; ?>	</td>
            <td><a href=""><button name="item-delete">Update</button> </a>  </td> 
            <td><a href=""><button name="item-delete">Delete</button> </a>  </td> 
        </tr>
    <?php
        }
    ?>
</table>

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