<?php
    session_start();
    include('../config/db.php');

    if(isset($_POST["about_btn"])){

        $top_about = mysqli_real_escape_string($db_connect, $_POST["top_about"]);
        $bottom_about = $_POST["bottom_about"];
        
        $update ="UPDATE abouts SET top_about='$top_about',bottom_about='$bottom_about'";

        if(mysqli_query($db_connect,$update)){
            
            $_SESSION['about_update'] = 'About Update Successfully';
            header('location: about_show.php');
        }else{
            echo "failed!";
        }
    }

    if(isset($_POST['image_update'])){

        $user_id = $_SESSION['admin_id'];
        $user_name = $_SESSION['admin_name'];
        $image_name = $_FILES['image']['name'];
        $image_temp_name = $_FILES['image']['tmp_name'];
        $explode = explode('.',$image_name);
        $extension = end($explode);
        $new_name = $user_id."-".$user_name."-".date("Y-m-d").".".$extension;
        $path = "../images/about/".$new_name;
        
        if(move_uploaded_file($image_temp_name,$path)){
            $image_update = "UPDATE abouts SET image='$new_name'";
            mysqli_query($db_connect,$image_update);

            $_SESSION['about_image'] = 'About Image Update Successfully';
            header('location: about_show.php');

        }
        
    }
?>