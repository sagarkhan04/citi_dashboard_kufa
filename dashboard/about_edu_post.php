<?php

include('../config/db.php');

if(isset($_POST["about_btn"])){

 $top_about = mysqli_real_escape_string($db_connect, $_POST["top_about"]);
 $bottom_about = $_POST["bottom_about"];

        $update ="UPDATE abouts SET top_about='$top_about',bottom_about='$bottom_about'";

    if(mysqli_query($db_connect,$update)){
        echo "about update";
    }else{
        echo "failed!";
    }
}
?>