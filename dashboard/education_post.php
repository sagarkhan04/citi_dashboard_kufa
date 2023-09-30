<?php 
    session_start();
    include('../config/db.php');

    // $_SERVER["REQUEST_METHOD"]== 'POST'
    if(isset($_POST['edu_btn'])){
        $year = $_POST['year'];
        $subject = $_POST['subject'];
        $progress = $_POST['progress'];

        if($year && $subject && $progress){

            $education_insert = "INSERT INTO educations(year,subject,progress) VALUES ('$year','$subject','$progress')";
            $educations = mysqli_query($db_connect,$education_insert);

            $_SESSION['education_success'] = 'Education Insert Successfully';
            header("location: education_show.php");

        }

    }


    if(isset($_GET['delete_id'])){

        $id = $_GET['delete_id'];

        $delete_education_quary = "DELETE FROM educations WHERE id='$id'";
        mysqli_query($db_connect,$delete_education_quary);

        $_SESSION['education_delete'] = 'Education Delete Successfully';
        header("location: education_show.php");

    }


    if(isset($_POST['edu_edit_btn'])){
        $id =$_POST['id'];
        $year = $_POST['year'];
        $subject = $_POST['subject'];
        $progress = $_POST['progress'];

        if($year && $subject && $progress){

            $education_update = "UPDATE educations SET year='$year',subject='$subject',progress='$progress' WHERE id='$id' ";
            $educations = mysqli_query($db_connect,$education_update);

            $_SESSION['education_update_success'] = 'Education Update Successfully';
            header("location: education_show.php");

        }

    }

?>