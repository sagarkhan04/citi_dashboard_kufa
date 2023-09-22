<?php 

include('../config/db.php');

session_start();
 //================== post session ==================

if(isset($_POST['testimonial_btn'])){

$name = $_POST['name'];
$sub_name = $_POST['sub_name'];
$description = $_POST['description'];

$image = $_FILES['image'] ['name'];
$image_temp_name = $_FILES['image'] ['tmp_name'];
$explode = explode('.',$image);
$extension = end($explode);


$new_name = date("Y-m-d-s").".".$extension;
$path = "../images/testimonial/".$new_name;

if($name && $sub_name && $description && $image){

    move_uploaded_file($image_temp_name, $path);
    
    $testimonial_quary = "INSERT INTO testimonials (name,sub_name,description,image) VALUES ('$name','$sub_name','$description','$new_name')";

    mysqli_query($db_connect,$testimonial_quary);

    $_SESSION['testimonial_insert'] = 'Testimonial Insert Successfully';
        header("location: testimonial_show.php");
}else{
    $_SESSION['testimonial_error'] = 'Testimonial Insert Error,Please Input Field';
        header("location: testimonial_add.php");
}

}

 //================== delete session ==================

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];


    $delete_quary = "DELETE FROM testimonials WHERE id='$id'";

    mysqli_query($db_connect,$delete_quary);

    $_SESSION['testimonial_delete'] = 'Testimonial Delete Successfully';
    header("location: testimonial_show.php");

}

//================== update(edit) session end ==================

 if(isset($_POST['testimonial_update_btn'])){
    

    $id = $_POST['id'];
    $name = $_POST['name'];
    $sub_name = $_POST['sub_name'];
    $description = $_POST['description'];
    
    $image = $_FILES['image'] ['name'];
    $image_temp_name = $_FILES['image'] ['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);
    
    $new_name = date("Y-m-d-s").".".$extension;
    $path = "../images/testimonial/".$new_name;


    
    if($name && $sub_name && $description){
        $update_testimonial = "UPDATE testimonials SET name='$name', sub_name='$sub_name', description='$description' WHERE id='$id'";

        mysqli_query($db_connect,$update_testimonial);

        $_SESSION['portfolio_insert'] = 'Portfolio Insert Successfully';
        header("location: testimonial_show.php");
        
    }else{
        $_SESSION['portfolio_insert_error'] = 'Portfolio Insert Error';
        header("location: testimonial_edit.php");
    }


}

?>