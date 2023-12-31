<?php
	include "PHP/session.php";
    include "PHP/config.php";	
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Basic -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <title>Menu Page</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

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


    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="breakfast.php">Breakfast</a>                                   
                                    </li>
                                    <li>
                                        <a href="drinks.php">Drinks</a>                                   
                                    </li>
                                    <li>
                                        <a href="category.php">Lunch and Supper</a>                                   
                                    </li>
                                    <li>
                                        <a href="fruits.php">Fruits</a>                                   
                                    </li>
                                    <li>
                                        <a href="specialoffers.php">Special Offers</a>                                   
                                    </li>
                                    <li>
                                        <a href="tinsandcups.php">Tins and cups</a>                                   
                                    </li>
                                </ul>
                            </div>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <!-- <div class="single_product_menu">
                                    <p><span>10000 </span> Food Items Found</p>
                                </div> -->
                                <!-- <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div> -->
                                <!-- <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">

                    <?php
                        include "PHP/config.php";

                        $query = mysqli_query($conn, "SELECT * FROM food WHERE Category_name = 'Lunch and Supper'");
                    ?>

                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">                                      
                                <img src="Photos/<?php echo $row['Image'];?>">
                                <div class="single_product_text">
                                    <h4><?php echo $row['Name']?></h2>
                                    <h3>Ksh <?php echo $row['Price']?></h3>
                                    <a href='cart2.php?id=<?php echo $row['Food_ID'] ?>&action=add' class="add_cart">+ Add to Cart</a>
                                    <!-- <a href='#' class='btn btn-inverse'>Back</a> -->
                                </div>                                       
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <!-- 
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_1.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_2.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_3.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_5.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_6.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_7.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_8.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_2.png" alt="">
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>$150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li> -->
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

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