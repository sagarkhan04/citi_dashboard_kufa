<?php 
    include("../config/db.php");

    session_start();
    
    $name = $_POST['name'];
    $name_update_btn = $_POST['name_update'];
    $password_update = $_POST['password_update'];
    $image_update = $_POST['image_update'];


    if(isset($name_update_btn)){
        if($name){ 
            $user_id = $_SESSION['admin_id'];
            
            $name_update_query = "UPDATE users SET name='$name' WHERE id='$user_id'";
            mysqli_query($db_connect,$name_update_query);
            
            $_SESSION['admin_name'] = $name;
            $_SESSION['name_update_success'] = "name update successfuly";
            header('location: profile.php');

        }else{
            $_SESSION['name_error'] = "name missing";
            header('location: profile.php');
            
        }
        
    }

// =======================--- password update section ---=======================

    if(isset($password_update)){

        $user_id = $_SESSION['admin_id'];
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if($current_password){
            $encrypt = md5($current_password);
            $select_password_query = "SELECT COUNT(*) AS password_check FROM users WHERE id='$user_id' AND password='$encrypt'";

            $select_password_query_connect = mysqli_query($db_connect,$select_password_query);


            if(mysqli_fetch_assoc($select_password_query_connect)['password_check'] == 1 ){
                
                if($new_password){
                    if($new_password == $confirm_password){
                        $new_pass = md5($new_password);
                        $update_query = "UPDATE users SET password='$new_pass' WHERE id='$user_id'";

                        mysqli_query($db_connect,$update_query);

                        $_SESSION["password_success"] = "Password update successfully";
                        header('location: profile.php'); 
                        
                    }else{
                        $_SESSION['password_error'] = "Those passwords did't match.Try again.";
                        header('location: profile.php');
                        
                    }
                }
                
                
            }else{
                $_SESSION['password_error'] = "Current passwords did't match.Try again.";
                header('location: profile.php');
            } 
        }else{
            $_SESSION['password_error'] = "current password is missing.";
            header('location: profile.php');
        }
    }


// =======================--- image update section ---=======================

    if(isset($image_update)){


        $user_id = $_SESSION['admin_id'];
        $user_name = $_SESSION['admin_name'];
        $image_name = $_FILES['image']['name'];
        $image_temp_name = $_FILES['image']['tmp_name'];
        $explode = explode('.',$image_name);
        $extension = end($explode);

        $new_name = $user_id."-".$user_name."-".date("Y-m-d").".".$extension;
        $path = "../images/profile/".$new_name;
        
        if(move_uploaded_file($image_temp_name,$path)){
            $image_update = "UPDATE users SET image='$new_name' WHERE id='$user_id'";

            mysqli_query($db_connect,$image_update);
            $_SESSION['admin_image'] = $new_name;

            header('location: profile.php');

        }
        
    }
?>