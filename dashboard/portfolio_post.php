<?php 

include('../config/db.php');

session_start();


 //================== post session ==================

if (isset($_POST['insert_btn'])) {
   
    $title = $_POST['title'];
    $design_name = $_POST['design_name'];
    $description = $_POST['description'];
    
    $image = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);


    $new_name = date("Y-m-d-s").".".$extension;
    $path = "../images/portfolio/".$new_name;

    
    if($title && $design_name && $description && $image){
        move_uploaded_file($image_temp_name, $path);

        $insert_portfolio = "INSERT INTO portfolios (title,design_name,description,image) VALUES ('$title','$design_name','$description','$new_name')";

        mysqli_query($db_connect,$insert_portfolio);

        $_SESSION['portfolio_insert'] = 'Portfolio Insert Successfully';
        header("location: portfolio_show.php");
        
    }else{
        $_SESSION['portfolio_insert_error'] = 'Portfolio Insert Error';
        header("location: portfolio_add.php");
    }

    }
     //================== post session end ==================

    //================== delete session ==================

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
    
    
        $delete_portfolio_quary = "DELETE FROM portfolios WHERE id='$id'";
    
    
        mysqli_query($db_connect,$delete_portfolio_quary);
    
        $_SESSION['portfolio_delete'] = 'Portfolio Delete Successfully';
        header("location: portfolio_show.php");
    
    }

 //================== delete session end ==================


 //================== update session end ==================

    if (isset($_POST['update_btn'])) {
   
        $id = $_POST['portfolio_id'];
        $title = $_POST['title'];
        $design_name = $_POST['design_name'];
        $description = $_POST['description'];
        
        $image = $_FILES['image']['name'];
        $image_temp_name = $_FILES['image']['tmp_name'];
        $explode = explode('.',$image);
        $extension = end($explode);
    
    
        $new_name = date("Y-m-d-s").".".$extension;
    
        $path = "../images/portfolio/".$new_name;
    
        
        // if(move_uploaded_file($image_temp_name,$path)){
        //     $image_update = "UPDATE portfolios SET image='$new_name' WHERE ";
    
        //     mysqli_query($db_connect,$image_update);
    
    
    
        //     header('location: portfolio_add.php');
    
        // }
    
    
        
        if($title && $design_name && $description && $image){
            $update_portfolio = "UPDATE portfolios SET title='$title', design_name='$design_name', description='$description', image='image' WHERE id='$id'";
    
            mysqli_query($db_connect,$update_portfolio);
    
            $_SESSION['portfolio_insert'] = 'Portfolio Insert Successfully';
            header("location: portfolio_show.php");
            
        }else{
            $_SESSION['portfolio_insert_error'] = 'Portfolio Insert Error';
            header("location: portfolio_edit.php");
        }
    
        }

        //================== update session end ==================
?>