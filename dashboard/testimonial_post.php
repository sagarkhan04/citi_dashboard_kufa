<?php 

include('../config/db.php');

if(isset($_POST['testimonial_btn'])){

$name = $_POST['name'];
$sub_name = $_POST['sub_name'];
$description = $_POST['description'];
$image = $_FILES['image'] ['name'];


if($name && $sub_name && $description && $image){

    $testimonial_quary = "INSERT INTO testimonials (name,sub_name,description,image) VALUES ('$name','$sub_name','$description','$image')";

    mysqli_query($db_connect,$testimonial_quary);

    $_SESSION['testimonial_insert'] = 'Testimonial Insert Successfully';
        header("location: testimonial_show.php");
}else{
    $_SESSION['testimonial_error'] = 'Testimonial Insert Error,Please Input Field';
        header("location: testimonial_add.php");
}

}


if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];


    $delete_quary = "DELETE FROM testimonials WHERE id='$id'";

    mysqli_query($db_connect,$delete_quary);

    $_SESSION['testimonial_delete'] = 'Testimonial Delete Successfully';
    header("location: testimonial_show.php");

}

?>