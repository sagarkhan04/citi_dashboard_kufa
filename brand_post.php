<?php 
include('../config/db.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $brand_name = $_POST['brand_name'];

    $image = $_FILES['image'] ['name'];
    $image_temp_name = $_FILES['image'] ['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);


    $brand_name = date("Y-m-d-s").".".$extension;
    $path = "../images/brand/.$new_name";

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



if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];


    $delete_brand_quary = "DELETE FROM brands WHERE id='$id'";
    mysqli_query($db_connect,$delete_brand_quary);

    $_SESSION['brand_delete'] = 'Brand Delete Successfully';
    header("location: brand_show.php");

}