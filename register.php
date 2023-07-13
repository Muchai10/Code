<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Register</title>
</head>
<body>
<br>
<br>
    <div class="container">
        <div class="box formbox">

        <?php 
            include("PHP/config.php");
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $id = mysqli_real_escape_string($conn,$_POST['Student_ID']);
                $fname = mysqli_real_escape_string($conn,$_POST['First_Name']); 
                $lname = mysqli_real_escape_string($conn,$_POST['Last_Name']);
                $password = mysqli_real_escape_string($conn,$_POST['Password']);
                $cpassword = mysqli_real_escape_string($conn,$_POST['Confirm_Password']);
                $email = mysqli_real_escape_string($conn,$_POST['Email_Address']);
                $mealplan = mysqli_real_escape_string($conn,$_POST['Meal_plan']);
                $phonenumber = mysqli_real_escape_string($conn,$_POST['Phone_Number']);          
                $verify_query = mysqli_query($conn,"SELECT * FROM student WHERE Student_ID='$id' or Email_Address='$email'");

                $passwordmd5 = md5($password);
                $cpasswordmd5 = md5($cpassword);

                if(mysqli_num_rows($verify_query) !=0){
                echo "<div class='message'>
                        <p>Username or Email has already been taken, Try another One Please</p>
                    </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                }  
                     
                else{
                    if($passwordmd5 != $cpasswordmd5){
                        echo "<div class='message'>
                                <p>Password Does Not Match</p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>"; 
                    }
                    else{                    
                    $sql =  "INSERT INTO student (Student_ID,First_Name,Last_Name,Password,Confirm_Password,Email_Address,Meal_plan,Phone_Number) VALUES('$id','$fname','$lname','$passwordmd5','$cpasswordmd5','$email','$mealplan','$phonenumber')";
                        mysqli_query($conn, $sql);
                        echo "<div class='message'>
                            <p>Registration Successful!</p>
                        </div> <br>";
                        echo "<a href='signin.php'><button class='btn'>Sign In</button>";
                    }      
                }
    
            }
            else {
        ?>

            <div class="nav">
                <div class="logo">
                    <img src="Photos\logo.png" alt="">
                </div>
            </div>
            <header>AFRICA NAZARENE UNIVERSITY: <br> CAFETERIA SYSTEM</header>
            <form method="POST">
            <div class="field input">
                    <label for="Student_ID">Student ID</label>
                    <input type="id" name="Student_ID" id="Student_ID" autocomplete="off" required>
                </div>   
            
            <div class="field input">
                    <label for="First_Name">First Name</label>
                    <input type="text" name="First_Name" id="First_Name" pattern="^(?=.{1,40}$)[a-zA-Z]+(?:[-'\s][a-zA-Z]+)*$" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Last_Name">Last Name</label>
                    <input type="text" name="Last_Name" id="Last_Name" pattern="^(?=.{1,40}$)[a-zA-Z]+(?:[-'\s][a-zA-Z]+)*$" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="Password" name="Password" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Confirm_Password">Confirm Password</label>
                    <input type="Password" name="Confirm_Password" id="Confirm_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Email_Address">Email Address</label>
                    <input type="email" name="Email_Address" id="Email_Address" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Email (Format: xxx@anu.ac.ke)" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Meal_plan">Type of meal plan</label>
                    <input type="text" name="Meal_plan" id="Meal_plan" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Phone_Number">Phone Number</label>
                    <input type="tel" name="Phone_Number" id="Phone_Number" pattern="^\+?\d{0,13}" title="Phone Number (Format: +254 700 000000)" autocomplete="off" required>
                </div>  

                <div class="field">
                        <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <br>
                <div class="links">
                    <p>Already have an account? <a href="signin.php">Sign In</a></p>                                      
                </div>
            </form>
        </div>
    </div> 
    <?php } ?>  
</body>
</html>
