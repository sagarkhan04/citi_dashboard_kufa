<?php 
    include('../config/db.php');

    session_start();

// ===============--- post session ---================
    if(isset($_POST['social_media_btn'])){

        $link = $_POST['link'];
        $icon = $_POST['icon'];

        if($link && $icon){
        
                $insert_media = "INSERT INTO social_medias (link,icon) VALUES ('$link','$icon')";
                mysqli_query($db_connect,$insert_media);

                $_SESSION['media_success'] = 'Social Insert Successfully';
                header("location: social_media_show.php");

        }else {
            $_SESSION['media_error'] = 'Please Insert Field';
            header("location: social_media_add.php");
        }
    }

// ===============--- dalete session ---================

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        $media_delete_query ="DELETE FROM social_medias WHERE id='$id'";

        mysqli_query($db_connect,$media_delete_query);

        $_SESSION['media_delete_success'] = 'Social Media Contact Delete Successfully';
            header("location: social_media_show.php");
    }

// ===============--- update session ---================

    if(isset($_POST['edit_id'])){

        $id = $_POST['media_id'];
        $link = $_POST['link'];
        $icon = $_POST['icon'];

    if($link && $icon){
    
        $update_social_media = "UPDATE social_medias SET link='$link', icon='$icon' WHERE id='$id'";
        mysqli_query($db_connect,$update_social_media);


            $_SESSION[''] = 'Service Insert Successfully';
            header("location: .php");

            
        }else{
        $_SESSION[''] = 'Please fill your input field';
        header("location: .php");
        }
}
?>