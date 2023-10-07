<?php 
    include('../config/db.php');

    if(isset($_POST['insert_btn'])){

        $brand_name = $_POST['brand_name'];

        $image = $_FILES['image'] ['name'];
        $image_temp_name = $_FILES['image'] ['tmp_name'];
        $explode = explode('.',$image);
        $extension = end($explode);
        $new_name = date("Y-m-d-s").".".$extension;
        $path = "../images/brand/$new_name";

        if($brand_name && $image){

            move_uploaded_file($image_temp_name, $path);
            
            $brand_quary = "INSERT INTO brands (brand_name,image) VALUES ('$brand_name','$new_name')";
            
            mysqli_query($db_connect,$brand_quary);

            $_SESSION['brand_insert'] = 'Brand Insert Successfully';
                header("location: brand_show.php");
        }else{
            $_SESSION['brand_error'] = 'Brand Insert Error,Please Input Field';
                header("location: brand_add.php");
        }

    }

// delete session

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];


        $delete_brand_quary = "DELETE FROM brands WHERE id='$id'";
        mysqli_query($db_connect,$delete_brand_quary);

        $_SESSION['brand_delete'] = 'Brand Delete Successfully';
        header("location: brand_show.php");
    }

    // update session 

    if(isset($_POST['update_btn'])){
        $id =$_POST['id'];
        $brand_name = $_POST['brand_name'];

        $image = $_FILES['image'] ['name'];
        $image_temp_name = $_FILES['image'] ['tmp_name'];
        $explode = explode('.',$image);
        $extension = end($explode);
        $new_name = date("Y-m-d-s").".".$extension;
        $path = "../images/brand/$new_name";

        if($brand_name && $image){

            move_uploaded_file($image_temp_name, $path);

            $image_query = "SELECT * FROM brands WHERE id = '$id'";
            $connect = mysqli_query($db_connect, $image_query);
            $old_image = mysqli_fetch_assoc($connect)["image"];

            unlink("../images/brand/$old_image");

            $brand_quary = "UPDATE brands SET brand_name='$brand_name',image='$new_name' WHERE id='$id'";
            mysqli_query($db_connect,$brand_quary);

            $_SESSION['brand_insert'] = 'Brand Insert Successfully';
                header("location: brand_show.php");
        }else{
            $_SESSION['brand_error'] = 'Brand Insert Error,Please Input Field';
                header("location: brand_add.php");
        }

}