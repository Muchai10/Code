<?php
	include "PHP/session.php";
    include "PHP/config.php";	
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <!-- <title>aranoz</title>
    <link rel="icon" href="img/favicon.png"> -->

    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home Page</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style1.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />  
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo1.png" alt="" /><span>
                              La Sala
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="breakfast.php"> Breakfast</a>
                                        <a class="dropdown-item" href="drinks.php"> Drinks</a>
                                        <a class="dropdown-item" href="category.php"> Lunch And Supper</a>
                                        <a class="dropdown-item" href="fruits.php"> Fruits</a>
                                        <a class="dropdown-item" href="specialoffers.php"> Special Offers</a>
                                        <a class="dropdown-item" href="tinsandcups,php"> Tins And Cups</a>
                                        <!-- <a class="dropdown-item" href="single-product.html"> Food Details</a> -->
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="tracking.html"> Tracking</a>
                                        <a class="dropdown-item" href="checkout.html"> Checkout</a>
                                        <a class="dropdown-item" href="confirmation.html"> Confirmation</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="cart.php">Cart (0)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <?php
                               if (isset($_SESSION['Student_ID'])) {
                                $id = $_SESSION['Student_ID'];
                            
                                $query = mysqli_query($conn, "SELECT * FROM student WHERE Student_ID='$id'") or die("Select Error");
                                $fetch = mysqli_fetch_array($query);
                            
                                // Rest of the code that uses $fetch array
                                } else {
                                    // Handle the case when Student_ID is not set in the session
                                    echo "Student ID not found in the session.";
                                }
                            ?>

                            
                                    <ul>
                                    <!-- <a href="signin.php" class="btn_3"> -->
                                    <button type="button" class="btn_3" style="height:40px" data-toggle="modal" data-target="#myProfile">
                                        My Profile
                                    </button>
                                        <!-- <li>Welcome:<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php //echo $fetch['First_Name']; ?>&nbsp;<?php //echo $fetch['Last_Name'];?></a></li> -->
                                    </ul>
                                    
                                    
                            
                              
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
                                  
    </header>
                <!-- Modal -->
                <div class="modal fade" id="myProfile" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">My Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <?php
                                $id = $_SESSION['Student_ID'];
                            
                                $query = mysqli_query($conn, "SELECT * FROM student WHERE Student_ID='$id'") or die("Select Error");
                                $fetch = mysqli_fetch_array($query);
                            ?>

                        <form  enctype='multipart/form-data' method="POST">
                            <center>
							<table>
                                <tr>
									<td class="profile">Student ID:</td><td class="profile">&nbsp;<?php echo $fetch['Student_ID'];?></td>
								</tr>
								<tr>
									<td class="profile">Name:</td><td class="profile">&nbsp;<?php echo $fetch['First_Name'];?>&nbsp;<?php echo $fetch['Last_Name'];?></td>
								</tr>
								<tr>
									<td class="profile">Email Address:</td><td class="profile">&nbsp;<?php echo $fetch['Email_Address'];?></td>
								</tr>								
								<tr>
									<td class="profile">Phone Number:</td><td class="profile">&nbsp;<?php echo $fetch['Phone_Number'];?></td>
								</tr>
							</table>
						</center>

                        </div>
                        <div class="modal-footer">
                        <a href="account.php?id=<?php echo $fetch['Student_ID']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
                        <a href="signin.php"><input type="button" class="btn btn-danger" name="" value="Log Out"></a>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>

    <!-- Header part end-->


  <!-- breadcrumb start-->
  <!-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Tracking Order</h2>
              <p>Home <span>-</span> Tracking Order</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- breadcrumb start-->

  <!--================Tracking Box Area =================-->
  <section class="tracking_box_area padding_top">
    <div class="container">
      <div class="row align-items-center">
        <!-- <div class="col-lg-6">
              <div class="reacking_box_text text-center h-100">
                <h2>New to our Shop?</h2>
                <p>There are advances being made in science and technology
                  everyday, and a good example of this is the</p>
                  <a href="#" class="btn_2">Create an Account</a>
              </div>
            </div> -->
        <div class="col-lg-12">
          <div class="tracking_box_inner">
            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
              given
              to you on your receipt and in the confirmation email you should have received.</p>
            <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
              </div>
              <div class="col-md-12 form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address">
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="btn_3">Track Order</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--================End Tracking Box Area =================-->

  <!--::footer_part start::-->
  <footer class="footer_part">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Top Products</h4>
            <ul class="list-unstyled">
              <li><a href="">Managed Website</a></li>
              <li><a href="">Manage Reputation</a></li>
              <li><a href="">Power Tools</a></li>
              <li><a href="">Marketing Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Features</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Resources</h4>
            <ul class="list-unstyled">
              <li><a href="">Guides</a></li>
              <li><a href="">Research</a></li>
              <li><a href="">Experts</a></li>
              <li><a href="">Agencies</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="single_footer_part">
            <h4>Newsletter</h4>
            <p>Heaven fruitful doesn't over lesser in days. Appear creeping
            </p>
            <div id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="subscribe_form relative mail_part">
                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = ' Email Address '">
                <button type="submit" name="submit" id="newsletter-submit"
                  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="copyright_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright_text">
              <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>