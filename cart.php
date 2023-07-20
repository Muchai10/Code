<?php
include("PHP/config.php");
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cart Page</title>

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
                      
                      <a href="signin.php" class="btn_3">
                          Log Out
                      </a>
                        
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
  <div class="search_input" id="search_input_box">
      <div class="container ">
          <form class="d-flex justify-content-between search-inner">
              <input type="text" class="form-control" id="search_input" placeholder="Search Here">
              <button type="submit" class="btn"></button>
              <span class="ti-close" id="close_search" title="Close Search"></span>
          </form>
      </div>
  </div>
</header>
  <!-- Header part end-->


  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <!-- <section class="breadcrumb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <!-- <table class="table"> -->
          <form method="post" action="function/place_order.php" class="well" style="background-color:#fff;">
		        <table class="table">
              <label> Your Cart</label>
              <tr>
              <th scope="col">Image</th>
              <th scope="col">Product Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Add</th>
              <th scope="col">Remove</th>
              <th scope="col">Subtotal</th>
              </tr>

              <?php

              $id = isset($_GET['Food_ID']) ? $_GET['Food_ID'] : 1;
              $action = isset($_GET['action']) ? $_GET['action'] : 'empty';

              switch ($action) {
                case 'view':
                  $_SESSION['cart'][$id];
                  break;
                case 'add':
                  $_SESSION['cart'][$id] = isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id] + 1 : 1;
                  
                  break;
                case 'add_':

                  // $query = "SELECT Quantity FROM food WHERE ID = '$id'";
                  // $result = mysqli_query($conn, $query);
                
                  // if ($result && mysqli_num_rows($result) > 0) {
                  // 	$row = mysqli_fetch_assoc($result);
                  // 	$quantity_available = $row['Quantity'];

                  // 	if (isset($_SESSION['cart'][$id])) {
                  // 		$qty = $_SESSION['cart'][$id] + 1;
                  // 	} else {
                  // 		$qty = 1;
                  // 	}
                  
                  // 	// Check if the quantity added to the cart exceeds the quantity available in the database
                  // 	if ($qty > $quantity_available) {
                  // 		echo "<script>alert('The quantity you added exceeds the quantity available in our stores.');</script>";
                  // 		// You can also redirect the user to the product page or perform any other action here
                  // 	} else {
                  // 		$_SESSION['cart'][$id] = $qty;
                  // 	}
                  //   }
                  break;
                  
                  
                case 'remove':
                  if (isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]--;
                    if ($_SESSION['cart'][$id] == 0) {
                      unset($_SESSION['cart'][$id]);
                    }
                  }
                  break;
                case 'empty':
                  unset($_SESSION['cart']);
                  break;
              }



              
              if (isset($_SESSION['cart'])) {	
              
                $total = 0;
                
                // Retrieve product details from the database for each item in the cart
                foreach ($_SESSION['cart'] as $id) {
                  $query = "SELECT * FROM food WHERE Food_ID = '$id'";
                  $result = mysqli_query($conn, $query);
              
                  if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
              
                    $name = substr($row['Name'], 0, 40);
                    $qty = 1;
                    $price = $row['Price'];
                    $image = $row['Image'];
                    //$product_size = $row['product_size'];
                    

              
                    $line_cost = $price;
                    $total += $line_cost;

                    
              
                    // Output the product information in a table row
                    echo "<tr>";
                    echo "<td><img height='100px' width='100px' src='Photos/".$image."'></td>";
                    echo "<td><input type='hidden' required value='".$id."' name='id[]'>".$name."</td>";
                    // echo "<td>".$product_size."</td>";
                    echo "<td><input type='hidden' required value='".$qty."' name='qty[]'>".$qty."</td>";
                    echo "<td>".$price."</td>";
                    echo "<td><a href='cart.php?id=" . $id . "&qty=" . ($qty + 1) . "'><i class='icon-plus-sign'> + </i></a></td>";
                    echo "<td><a href='cart.php?id=".$id."&action=remove'><i class='icon-minus-sign'> - </i></a></td>";
                    echo "<td><strong>P ".$line_cost."</strong></td>";
                    echo "</tr>";
                    }
                  }
                
                  // Output the total and empty cart button
                  echo "<tr>";
                  echo "<td colspan='4'></td>";
                  echo "<td><strong>TOTAL:</strong></td>";
                  echo "<td>><input type='hidden' required value='".$total."' name='total'><strong>P ".$total."</strong></td>";
                  echo "<td></td>";
                  echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";		
                  echo "</tr>";
                
              } else {
                // Output a message if the cart is empty
                echo "<tr>";
                echo "<td colspan='8' style='text-align:center'>Cart is empty</td>";
                echo "</tr>";
              }
              
              ?>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="category.php">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
              </div>

              <!-- <div class='pull-right'>
                  <a href='home.php' class='btn btn-inverse'>Continue Shopping</a>
                  <button name="place_order" type="submit" class="btn btn-inverse" onclick="alert('Thank you for your purchase, You will be contacted when your order is approved!')">Purchase</button>
              
                  <?php //echo '<button name="total" type="submit" class="btn btn-inverse btn-lg" >Purchase</button>';

                  ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchase">Purchase mode</button>

              </form>
            </div> -->


            <!-- Modal -->
            <div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Select Payment Method</h3>
              </div>
              <div class="modal-body">
                <form method="post" action="function/place_order.php">
                  <center>
                    <label for="mpesa-reference">M-Pesa Transaction Reference:</label>
                    <input type="text" id="mpesa-reference" name="mpesa_reference" placeholder="Enter M-Pesa transaction reference">
                    <br>
                    <br>
                
                    <button name="place_order" type="button" class="btn btn-lg btn-primary" onclick="submitMpesa()">M-Pesa</button>
                    <button name="place_order" type="button" class="btn btn-lg btn-success" onclick="submitCash()">Cash</button>
                  </center>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
              </div>
            </div>
          <script>
            function submitMpesa() {
              var reference = document.getElementById("mpesa-reference").value;
              if (reference) {
              // Check if payment method is M-Pesa
              if (isset($_POST['mpesa']) && $_POST['mpesa'] == "true") {
                    // Get the reference number
                    $reference = $_POST['reference'];
                    // Insert the transaction with the reference number
                    $query = mysqli_query($conn, "INSERT INTO `transaction` ( payment) VALUES ('$reference')") or die(mysqli_error($conn));
                  } else {
                    // Insert the transaction with cash on delivery payment method
                    $query = mysqli_query($conn, "INSERT INTO `transaction` (payment) VALUES ('cash on delivery')") or die(mysqli_error($conn));
                  }
                alert("Payment received via M-Pesa with reference number " + reference);
              } else {
                alert("Please enter the M-Pesa transaction reference number.");
              }
            }

            function submitCash() {
              alert("Payment will be done after delivery.");
            }
          </script>

                
                
              <br />		
              <br />	
          </div>

            <!--<thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/cart-1.jpg" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/cart-1.jpg" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count"> -->
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <!-- <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/cart-1.jpg" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        <a href="#">Flat Rate: $5.00</a>
                      </li>
                      <li>
                        <a href="#">Free Shipping</a>
                      </li>
                      <li>
                        <a href="#">Flat Rate: $10.00</a>
                      </li>
                      <li class="active">
                        <a href="#">Local Delivery: $2.00</a>
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a>
                  </div>
                </td>
              </tr>
            </tbody>-->
          <!-- </table> -->
        </div>
      </div>
    </div>
  </section> 
  <!--================End Cart Area =================-->
<br>
<br>
<br>
<br>
<br>
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