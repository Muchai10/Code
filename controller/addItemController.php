<?php
    include_once "PHP/config.php";
    
    if(isset($_POST['upload']))
    {
        $id = mysqli_real_escape_string($conn,$_POST['p_ID']);
        $name = mysqli_real_escape_string($conn,$_POST['p_name']);
        $price = mysqli_real_escape_string($conn,$_POST['p_price']);
        $category = mysqli_real_escape_string($conn,$_POST['category']);
         
        $image = mysqli_real_escape_string($conn,$_FILES['file']['name']);
        $temp = mysqli_real_escape_string($conn,$_FILES['file']['tmp_name']);
    
        $location = "./Photos/";
        $lname = $location.$image;

        $target_dir="../Photos/";
        $finalImage=$target_dir.$image;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO food
         (ID,Name,Price,Category_ID,Image) 
         VALUES ('$id',$name',$price,'$category','$lname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>
