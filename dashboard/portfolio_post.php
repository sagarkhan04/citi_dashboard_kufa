<?php 
    include('../config/db.php');

    session_start();

 //================== post session ==================

    if (isset($_POST['insert_btn'])) {
        $title = $_POST['title'];
        $design_name = $_POST['design_name'];
        $description_short = $_POST['description_short'];
        $description_long = $_POST['description_long'];
        
        $image = $_FILES['image']['name'];
        $image_temp_name = $_FILES['image']['tmp_name'];
        $explode = explode('.',$image);
        $extension = end($explode);
        $new_name = date("Y-m-d-s").".".$extension;
        $path = "../images/portfolio/".$new_name;


        if($title && $design_name && $description_short && $description_long && $image){
            move_uploaded_file($image_temp_name, $path);
            $insert_portfolio = "INSERT INTO portfolios (title,design_name,description_short,description_long,image) VALUES ('$title','$design_name','$description_short','$description_long','$new_name')";
                mysqli_query($db_connect,$insert_portfolio);

            $_SESSION['portfolio_insert'] = 'Portfolio Insert Successfully';
                header("location: portfolio_show.php");
            
        }else{
            $_SESSION['portfolio_insert_error'] = 'Portfolio Insert Error';
                header("location: portfolio_add");
        }

        }
     //================== post session end ==================

    //================== delete session ==================

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
    
        $delete_portfolio_quary = "DELETE FROM portfolios WHERE id='$id'";
        mysqli_query($db_connect,$delete_portfolio_quary);
    
        $_SESSION['portfolio_delete'] = 'Portfolio Delete Successfully';
        header("location: portfolio_show.php");
    
    }

        //================== update(edit) session ==================
    if (isset($_POST['update_btn'])) {
        $title = $_POST['title'];
        $portfolio_id = $_POST['portfolio_id'];
        $design_name = $_POST['design_name'];
        $description_short = $_POST['description_short'];
        $description_long = $_POST['description_long'];
        $image = $_FILES['image'];

        if ($title && $portfolio_id && $design_name && $description_short && $description_long) {
            $update_query = "UPDATE portfolios SET title='$title', design_name='$design_name', description_short='$description_short', description_long='$description_long' WHERE id='$portfolio_id'";
            mysqli_query($db_connect,$update_query);
    //================== image update(edit) session ==================
            if ($image["error"] == 0) {
                $new_name = md5(rand(1000, 9000)) . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
                $tmp_name = $image["tmp_name"];
                $path = "../images/portfolio/$new_name";
                move_uploaded_file($tmp_name, $path);
    //==================image unlink session  ==================
                $image_query = "SELECT * FROM portfolios WHERE id = '$portfolio_id'";
                $connect = mysqli_query($db_connect, $image_query);
                $old_image = mysqli_fetch_assoc($connect)["image"];

                unlink("../images/portfolio/$old_image");

                $update_image_query = "UPDATE portfolios SET image='$new_name' WHERE id='$portfolio_id'";
                mysqli_query($db_connect, $update_image_query);
            }

            $_SESSION['portfolio_insert'] = 'Update Successfully';
            header("location: portfolio_show.php");
        }
    }

    if(isset($_GET['change_status'])){

        $id = $_GET['change_status'];

        $select_portfolios = "SELECT * FROM portfolios WHERE id='$id'";
        $connect = mysqli_query($db_connect,$select_portfolios);
        $portfolios = mysqli_fetch_assoc($connect);
    
        if($portfolios['status'] == 'active') {
        $update_query = "UPDATE portfolios SET status='deactive' WHERE id='$id'";
            mysqli_query($db_connect,$update_query);
                header("location: portfolio_show.php");
        }else{
            $update_query = "UPDATE portfolios SET status='active' WHERE id='$id'";
                mysqli_query($db_connect,$update_query);
                    header("location: portfolio_show.php");
                }
    }
        
?>