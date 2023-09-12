<?php 
include('./config/db.php');
session_start();

    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $comfirm_password = ($_POST['comfirm_password']);

if ($name){
    echo "<h1></h1>";
}else{
    $_SESSION['name_error'] = "Please Enter Your Name";
    header("location: registration.php"); 
}


if ($email){

}else{
    $_SESSION['email_error'] = "Please Enter Your E-mail";
    header("location: registration.php");
}


if ($password){
    // if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
        
    } else {
        $_SESSION['pass_error'] = "Please Enter Your Password";
        header("location: registration.php");
    }


if ($comfirm_password){
    if ($password == $comfirm_password){
    // $_SESSION['old_cn'] = "$comfirm_password";
    }else{
        $_SESSION['cn_password_error'] = "Comfirm Password can't match password";
        header("location: registration.php");
    }
}else{
    $_SESSION['cn_password_error'] = "Please Enter Your Comfirm Password";  
    header("location: registration.php");
}



if ($name && $email && $password && $comfirm_password){

$email_validity = "SELECT COUNT(*) AS validity FROM users_project_1 WHERE email='$email'";
$email_validity_connect = mysqli_query($db_connect,$email_validity);

if(mysqli_fetch_assoc($email_validity_connect)['validity'] == 0){
    $encrypt_pass = md5 ($password); // password show na korar jonnno
    
    $insert_query = "INSERT INTO users_project_1 (name,email,password) VALUES ('$name','$email','$encrypt_pass')";
    mysqli_query($db_connect,$insert_query);

    // include('success.php');

    echo "";

    $_SESSION['registration_success'] = 'registration successfuly';
    $_SESSION['s_user'] = $name;
    $_SESSION['s_email'] = $email;
    $_SESSION['s_password'] = $password;
    header("location: login.php");  
}else{
    $_SESSION['registration_error'] = 'This information already exists';
    header("location: registration.php");
}


}


?>