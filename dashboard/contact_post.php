<?php
    include('../config/db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $facebook = $_POST["facebook"];
        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $github = $_POST["github"];
        $linkedin = $_POST["linkedin"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $update = "UPDATE contacts SET facebook='$facebook',twitter='$twitter',instagram='$instagram',linkedin='$linkedin',github='$github',phone='$phone',email='$email',address='$address'";

        if (mysqli_query($db_connect, $update)) {
            echo "contact updated!";
        } else {
            echo "failed!";
        }
    }
?>