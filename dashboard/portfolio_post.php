<?php 

include('../config/db.php');

session_start();


if (isset($_POST['insert_btn'])) {
   
    $title = $_POST['title'];
    $design_name = $_POST['design_name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);


    $new_name = date("Y-m-d-s").".".$extension;

    $path = "../images/portfolio".$new_name;

    
    // if(move_uploaded_file($image_temp_name,$path)){
    //     $image_update = "UPDATE portfolios SET image='$new_name' WHERE ";

    //     mysqli_query($db_connect,$image_update);



    //     header('location: portfolio_add.php');

    // }


    
    if($title && $design_name && $description && $image){
        $insert_portfolio = "INSERT INTO portfolios (title,design_name,description,image) VALUES ('$title','$design_name','$description','$new_name')";

        mysqli_query($db_connect,$insert_portfolio);

        $_SESSION['portfolio_insert'] = 'Portfolio Insert Successfully';
        header("location: portfolio_show.php");
        
    }else{
        $_SESSION['portfolio_insert_error'] = 'Portfolio Insert Error';
        header("location: portfolio_add.php");
    }

    }



?>