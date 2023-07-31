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



<?php
			
            $id = $_SESSION['Student_ID'];

            $query = mysqli_query ($conn, "SELECT * FROM student WHERE Student_ID = '$id' ") or die();
            $fetch = mysqli_fetch_array ($query);
            {
                $fname=$fetch['First_Name'];
                $lname=$fetch['Last_Name'];
                $email=$fetch['Email_Address'];
                
                $phone=$fetch['Phone_Number'];

                $password=$fetch['Password'];
                $studentid=$fetch['Student_ID'];
            }
    ?>
<div id="account">
<form method="POST" action="PHP/edit.php">
    <center>
    <h3>Edit My Account...</h3>
        <table>
            <tr>
                <td>First Name:</td><td><input type="text" name="First_Name" placeholder="First Name" required value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td>Last Name:</td><td><input type="text" name="Last_Name" placeholder="Last Name" required value="<?php  echo $lname;?>"></td>
            </tr>
            <tr>
                <td>Email Address:</td><td><input type="text" name="email" placeholder="Email Address" style="width:430px;"required value="<?php echo $email;?>"></td>
            </tr>                          
            <tr>	
                <td>Phone Number:</td><td><input type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>" maxlength="11"></td>
            </tr>
            
            <tr>
                    <td>Confirm Password:</td><td><input type="Password" name="Confirm_Password" placeholder="Confirm Password" required></td>
            </tr>
            <tr>
                <td></td><td>
                <input type="submit" name="edit" value="Save Changes" class="btn btn-primary" onclick="return confirm('Are you sure you want to update your account information?')">

                <input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a></td>
            </tr>
        </table>	
    </center>
</form>
</div>