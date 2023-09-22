<?php


session_start();
include('../config/db.php');


if(isset($_POST['insert_btn'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];
    $status = $_POST['status'];

   
    if($title && $description && $icon){
        $insert_service = "INSERT INTO services (title,description,icon) VALUES ('$title','$description','$icon')";
        mysqli_query($db_connect,$insert_service);
         

        $_SESSION['service_insert'] = 'Service Insert Successfully';
        header("location: services.php");

        
    }else{
       $_SESSION['service_error'] = 'Please fill your input field';
       header("location: service_add.php");
    }
}

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];


    $delete_quary = "DELETE FROM services WHERE id='$id'";

    mysqli_query($db_connect,$delete_quary);

    $_SESSION['service_delete'] = 'Service Delete Successfully';
    header("location: services.php");

}


if(isset($_POST['edit_btn'])){

    $id = $_POST['service_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];
    


    
    if($title && $description && $icon){
         
        $update_service = "UPDATE services SET title='$title', description='$description', icon='$icon' WHERE id='$id'";
        mysqli_query($db_connect,$update_service);


        $_SESSION['service_update'] = 'Service Insert Successfully';
        header("location: services.php");

        
    }else{
       $_SESSION['service_update_error'] = 'Please fill your input field';
       header("location: service_add.php");
    }
}




?>