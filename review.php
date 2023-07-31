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
                                        <a class="dropdown-item" href="tracking.php"> Tracking</a>
                                        <!-- <a class="dropdown-item" href="checkout.html"> Checkout</a> -->
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
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->
<br><br><br><br>
  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <!-- <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Comments</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
            aria-selected="false">Reviews</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <!-- <p>
            Beryl Cook is one of Britain’s most talented and amusing artists
            .Beryl’s pictures feature women of all shapes and sizes enjoying
            themselves .Born between the two world wars, Beryl Cook eventually
            left Kendrick School in Reading at the age of 15, where she went
            to secretarial school and then into an insurance office. After
            moving to London and then Hampton, she eventually married her next
            door neighbour from Reading, John Cook. He was an officer in the
            Merchant Navy and after he left the sea in 1956, they bought a pub
            for a year before John took a job in Southern Rhodesia with a
            motor company. Beryl bought their young son a box of watercolours,
            and when showing him how to use it, she decided that she herself
            quite enjoyed painting. John subsequently bought her a child’s
            painting set for her birthday and it was with this that she
            produced her first significant work, a half-length portrait of a
            dark-skinned lady with a vacant expression and large drooping
            breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
          </p>
          <p>
            It is often frustrating to attempt to plan meals that are designed
            for one. Despite this fact, we are seeing more and more recipe
            books and Internet websites that are dedicated to the act of
            cooking for one. Divorce and the death of spouses or grown
            children leaving for college are all reasons that someone
            accustomed to cooking for more than one would suddenly need to
            learn how to adjust all the cooking practices utilized before into
            a streamlined plan of cooking that is more efficient for one
            person creating less
          </p> -->
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <!-- <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Width</h5>
                  </td>
                  <td>
                    <h5>128mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Height</h5>
                  </td>
                  <td>
                    <h5>508mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Depth</h5>
                  </td>
                  <td>
                    <h5>85mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Weight</h5>
                  </td>
                  <td>
                    <h5>52gm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Quality checking</h5>
                  </td>
                  <td>
                    <h5>yes</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Freshness Duration</h5>
                  </td>
                  <td>
                    <h5>03days</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>When packeting</h5>
                  </td>
                  <td>
                    <h5>Without touch of hand</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Each Box contains</h5>
                  </td>
                  <td>
                    <h5>60pcs</h5>
                  </td>
                </tr>
              </tbody>
            </table> -->
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item reply">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-3.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Post a comment</h4>
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                  novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="btn_3">
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="row total_rate">
                <div class="col-6">
                </div>
                <div class="col-6">
                </div>
              </div>
              <!-- <div class="review_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>

                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-3.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div> -->
            </div>

            <?php
              if($_SERVER['REQUEST_METHOD'] == "POST"){
                $id = mysqli_real_escape_string($conn,$_POST['Student_ID']);
                $rating = mysqli_real_escape_string($conn,$_POST['Rating']); 
                $wtime = mysqli_real_escape_string($conn,$_POST['Wait_Time']);
                $review = mysqli_real_escape_string($conn,$_POST['Review_description']);
                         
                $sql =  "INSERT INTO reviews (Student_ID, Rating, Wait_Time, Review_description) VALUES('$id','$rating','$wtime','$review')";
                $result = mysqli_query($conn,$sql);

                if($result){
                  echo '<script> alert("Review Sent") </script>';
                  //header('location:index.php');
                }  
                     
                else{
                  echo '<script> alert("Connection Error") </script>';    
                }
    
            }
            else {
        ?>
            

            <div class="col-lg-12">
              <div class="review_box">
                <h4>Add a Review</h4>
                <p>Your Rating:</p>
                <form class="row contact_form" method="post">
                  <div class="col-md-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="Student_ID" id="Student_ID" placeholder="Your Student ID" required />
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group">
                      <input type="number" class="form-control" name="Rating" id="Rating" placeholder="Your Rating (On A Scale Of 1-10)" required/>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="Wait_Time" id="Wait_Time" placeholder="Wait Time" required/>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group">
                      <textarea class="form-control" name="Review_description" id="Review_description" rows="1" placeholder="Review Description" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-10 text-right">
                    <button type="submit" name="submit" value="submit" class="btn_3">
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php } ?>
  <!--================End Product Description Area =================-->

   <!-- product_list part start-->
   <?php 
        // //include ('PHP/config.php');
        // include "PHP/config.php";
        // $sql="SELECT * from food";
        // $result=$conn-> query($sql);
        // $count=1;
        // if ($result-> num_rows > 0){
        // while ($row=$result-> fetch_assoc()) {
    ?>
        <section class="product_list section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_tittle text-center">
                            <h2>Our Special Dishes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        //while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-12">
                        <div class="product_list">                         
                            <div class="row align-items-center justify-content-between">

                            <?php
                                $query = mysqli_query($conn, "SELECT * FROM food LIMIT 4");
                                ?>

                                <?php while ($row = mysqli_fetch_array($query)): ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">                                      
                                            <img src="Photos/<?php echo $row['Image'];?>">
                                            <div class="single_product_text">
                                                <h4><?php echo $row['Name']?></h2>
                                                <h3>Ksh <?php echo $row['Price']?></h3>
                                                <!-- <a href='# <?php echo $row['ID'] ?>&action=add' class="add_cart">Add to Cart<i class="ti-heart"></i></a>
                                                <a href='#' class='btn btn-inverse'>Back</a> -->
                                            </div>                                       
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- product_list part end-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Food</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Menu</a></li>
                            <li><a href="">Special Dishes</a></li>
                            <li><a href="">Order</a></li>
                            <li><a href="">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Support</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Volunteer</a></li>
                            <li><a href="">Hire Us</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Upcoming Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Services</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Contact</a></li>
                            <li><a href="">Message</a></li>
                            <li><a href="">Tracking</a></li>
                            <li><a href="">Checkout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Subscribe Now</h4>
                        <p>Subscribe to our newsletter.
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">Subscribe</button>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-instagram"></i></a></li>
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
  <script src="js/lightslider.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/swiper.jquery.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/stellar.js"></script>
  <!-- custom js -->
  <script src="js/theme.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>