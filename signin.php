<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Signin</title>
</head>
<body>
    <div class="container">
        <div class="box formbox">

            <?php
                include("PHP/config.php");
                if(isset($_POST['submit'])){
                    $id = mysqli_real_escape_string($conn,$_POST['Student_ID']);
                    $password = mysqli_real_escape_string($conn,$_POST['Password']);

                    $passwordmd5 = md5($password);
                    $result = mysqli_query($conn, "SELECT * FROM student WHERE Student_ID='$id'") or die("Select Error");
                    
                    
                    if(mysqli_num_rows($result) !=0){
                        $row = mysqli_fetch_assoc($result);
                        if($passwordmd5 == $row['Password']){
                            $_SESSION['Student_ID'] = $row['Student_ID'];
                            header("Location: index.html");
                        }

                        else{
                            echo "<div class='message'>
                                    <p>Wrong Password</p>  
                                  </div> <br>";
                            echo "<a href='signin.php'><button class = 'btn'>Go Back</button>";
                        }
                    }
                
                
                    else{
                        echo "<div class='message'>
                                    <p>User Not Registered</p>  
                                  </div> <br>";
                        echo "<a href='register.php'><button class = 'btn'>Register</button>";
                    }
                
                
                } else{

            ?>
            <div class="nav">
                <div class="logo">
                    <img src="Photos\logo.png" alt="">
                </div>
            </div>
            <!-- <header>Sign In</header> -->
            <header>AFRICA NAZARENE UNIVERSITY: <br> CAFETERIA SYSTEM</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Student_ID">Username</label>
                    <input type="text" name="Student_ID" id="Student_ID" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off"  required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign In" required>
                    
                </div>
                <br>
                <div class="links">
                    <p>Not yet registered <a href="register.php">Register Here</a></p>                   
                    <a href="index.html">Forgot your password</a>
                </div>
            </form>
        </div>
    </div>   
    <?php } ?>
</body>
</html>
