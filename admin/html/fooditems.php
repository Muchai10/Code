<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Items</title>

    <!-- Page css -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <?php          
        include "PHP/config.php";

        if(isset($_POST['add_product'])){
            $id = mysqli_real_escape_string($conn,$_POST['ID']);
            $name = mysqli_real_escape_string($conn,$_POST['Name']); 
            $price = mysqli_real_escape_string($conn,$_POST['Price']);
            $category = mysqli_real_escape_string($conn,$_POST['Price']);
            $image = mysqli_real_escape_string($conn,$_FILES['Image']['name']);
            $image_tmp_name = mysqli_real_escape_string($conn,$_FILES['Image']['tmp_name']);
            
            if(empty($id) || empty($name) || empty($image)){
                echo "<script>alert('Input invalid')</script>";
                $error_msg = "Please Fill Out All The Details";
                header("Location: fooditems.php");
            }       
            else{                   
                $sql =  "INSERT INTO food (ID,Name,Price,Category,Image) VALUES('$id','$name','$price','$category','$image')";
                    mysqli_query($conn, $sql);
                    echo "<script>alert('Input valid')</script>";
                    $error_msg = "Successful Input";
                    header("Location: fooditems.php");  
            }

        }
        else {

        
    ?>

    <div class="container">
        <div class="admin-product-form-container">
            <form action="<?php //$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3>Add new product</h3>

                <div class="field input">
                    <input type="id" placeholder="Enter ID" name="ID" class="box">
                </div>

                <div class="field input">
                    <input type="text" placeholder="Enter Name" name="Name" class="box">
                </div>

                <div class="field input">
                    <input type="text" placeholder="Enter Price" name="Price" class="box">
                </div>

                <div class="field input">
                    <select id="category" class="box">
                        <option disabled selected>Select category</option>
                        <?php

                        $sql="SELECT * from food_category";
                        $result = $conn-> query($sql);

                        if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                            echo"<option value='".$row['Category_ID']."'>".$row['Category_name'] ."</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="field input">
                    <input type="file" accept="image/png, image/jpeg, image/jpg"  name="Image" class="box">
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="add_product" value="Add Product">
                </div>
    
            </form>
        </div>
    </div>
    <?php } ?>  
</body>
</html>