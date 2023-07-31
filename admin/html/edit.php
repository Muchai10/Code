<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Students</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              
              <span class="app-brand-text demo menu-text">Café La Sala</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
                        
            <!-- Components -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> -->
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Manage</span>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="students.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Students</div>
              </a>
            </li>

            <!-- Cards -->
            <li class="menu-item">
              <a href="food.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Food Items</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Reports</span>
            </li>

            <li class="menu-item">
              <a href="sales.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="User interface">Sales</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="reviews.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Reviews</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Peter Kitale</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><span>Edit Student</span></h4>

              <div class="col-xl-6">
                <!-- HTML5 Inputs -->
                <div class="card mb-4">
                    <!-- <h5 class="card-header">HTML5 Inputs</h5> -->
                    <div class="card-body">

                    <?php
                      include_once "PHP/config.php";
                      if(isset($_GET['editid'])){
                        $id = mysqli_real_escape_string($conn, $_GET['editid']);
                        $query = "SELECT * FROM student WHERE Student_ID = '$id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                          $student = mysqli_fetch_array($query_run);
                          ?>
                        
                      <form  enctype='multipart/form-data' method="POST">
                        <input type="hidden" name="s_id" id="s_id" value="<?=$student; ?>">
                        <div class="mb-3 row">
                          <label for="fname" class="col-md-2 col-form-label">First Name</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="First_Name" id="First_Name" value="<?=$student['First_Name']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="lname" class="col-md-2 col-form-label">Last Name</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="l_name" id="l_name" value="<?=$student['Last_Name']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="password" class="col-md-2 col-form-label">Password</label>
                          <div class="col-md-10">
                          <input type="password" class="form-control" name="password" id="password"  value="<?=$student['Password']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="cpassword" class="col-md-2 col-form-label">Confirm Password</label>
                          <div class="col-md-10">
                          <input type="password" class="form-control" name="cpassword" id="cpassword" value="<?=$student['Confirm_Password']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="email" class="col-md-2 col-form-label">Email</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="email" id="email" value="<?=$student['Email_Address']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="meal_plan" class="col-md-2 col-form-label">Meal Plan</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="meal_plan" id="meal_plan" value="<?=$student['Meal_plan']; ?>" required>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="phonenumber" class="col-md-2 col-form-label">Phone</label>
                          <div class="col-md-10">
                          <input type="number" class="form-control" name="phonenumber" id="phonenumber" value="<?=$student['Phone_Number']; ?>" required>
                          </div>
                        </div>
                        
                        <br>
                        <div class="mb-3">                      
                              <button type="submit" class="btn btn btn-primary" name="edit" id="edit" style="height:40px">Save Changes</button> &nbsp; &nbsp; &nbsp;
                              <button type="button" class="btn btn-danger" style="height:40px"><a href="students.php" class="text-white">
                              Go Back
                              </a>
                            </button>
                        </div>
                              <div class="form-group">
                              
                              </div>
                              
                        </form>
                      
                    
                    
                  
                  <?php
                        }
                        else{
                          echo "<h4>No Such Id found.</h4>";
                        }
                      }
                    ?>
                </div>

                  </div>
                  <br><br><br><br><br><br><br><br>
                
                  <?php
                    if(isset($_POST['edit']))
                    {
                        $id = mysqli_real_escape_string($conn,$_POST['s_id']);
                        $fname = mysqli_real_escape_string($conn,$_POST['First_Name']);
                        $lname = mysqli_real_escape_string($conn,$_POST['l_name']);
                        $password = mysqli_real_escape_string($conn,$_POST['password']);
                        $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
                        $email = mysqli_real_escape_string($conn,$_POST['email']);
                        $mealplan = mysqli_real_escape_string($conn,$_POST['meal_plan']);
                        $phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);               
                         
                        $passwordmd5 = md5($password);
                        $cpasswordmd5 = md5($cpassword);            
                         
                        $insert = mysqli_query($conn,"UPDATE student SET First_Name = '$fname',Last_Name = '$lname',Password = '$passwordmd5',Confirm_Password = '$cpasswordmd5',Email_Address = '$email',Meal_plan = '$mealplan',Phone_Number = '$phonenumber' WHERE Student_ID = '$id'");
                        $query = mysqli_query($conn,$insert);

                        if(!$query)
                        {
                          //echo '<script>alert("Connection error") </script>';
                            echo mysqli_error($conn);
                        }
                        else
                        {  
                          if($passwordmd5 != $cpasswordmd5){
                              echo '<script> alert("Passwords Do Not Match") </script>';
                          }
                          else{                    
                              echo '<script> alert("Successful") </script>';
                              //header('location:students.php');
                          }  
                        }
                    
                    }     
                  ?>
                  

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © Copyright
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
