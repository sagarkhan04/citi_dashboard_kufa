<?php
    include('../config/db.php');

    session_start();


    //   ====== post session (data base insert ) ======

    if(isset($_POST['facts_btn'])){

        $number = $_POST['number'];
        $info_name = $_POST['info_name'];
        $icon = $_POST['icon'];


        if($number && $info_name && $icon){
            $insert_fact = "INSERT INTO facts (number,info_name,icon) VALUES ('$number','$info_name','$icon')";
            mysqli_query($db_connect,$insert_fact);
            

            $_SESSION['facts_insert'] = 'Facts Insert Successfully';
            header("location: facts_show.php");

            
        }else{
        $_SESSION['facts_insert_error'] = 'Please fill your input field';
        header("location: facts_add.php");
        }
        
    }

    //   ====== show delete session ======

    if(isset($_GET['delete_id'])){

        $id = $_GET['delete_id'];

        $delete_facts_quary = "DELETE FROM facts WHERE id='$id'";

        mysqli_query($db_connect,$delete_facts_quary);

        $_SESSION['facts_delete'] = 'Facts Delete Successfully';
        header("location: facts_show.php");

    }

//   ====== show edit session ======

    if(isset($_POST['facts_edit_btn'])){

        $number = $_POST['number'];
        $info_name = $_POST['info_name'];
        $icon = $_POST['icon'];
        $id = $_POST['facts_id'];
        
        
        if($number && $info_name && $icon){
            $update_facts = "UPDATE facts SET number='$number', info_name='$info_name', icon='$icon' WHERE id='$id'";

            mysqli_query($db_connect,$update_facts);
            
            $_SESSION['facts_update'] = 'Facts Update Successfully';
            header("location: facts_show.php");
        
            
        }else{
        $_SESSION['facts_update_error'] = 'Please fill your input field';
        header("location: facts_edit.php");
        }
            
    }
?>