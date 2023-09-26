<?php 

include('../config/db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('./src/PHPMailer.php');
include('./src/SMTP.php');
include('./src/Exception.php');


if(isset($_POST['mail_send_btn'])){


    $name = $_POST['name'];
    $send_email_to = $_POST['email'];
    $subject_name = $_POST['subject'];
    $message = $_POST['message'];


    $subject ="KUFA Admin Greetins Message"; 
    $body = "Thank You $name sir.Congratulations on your incredible success! I always knew you could do it, and I'm incredibly proud of you.";




if($name && $send_email_to){

    $insert_mail = "INSERT INTO mails (name,email,subject,message) VALUES ('$name','$send_email_to','$subject_name','$message')";
    mysqli_query($db_connect,$insert_mail);

    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sagar.cmt1920@gmail.com';                    //SMTP username
    $mail->Password   = 'hsqbavxbzxksuwst';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sagar.cmt1920@gmail.com', 'Sagar Khan');
    $mail->addAddress("$send_email_to");     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "$body";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Thank You,Message has been Successfully';
    }
}

 //================== delete session ==================

 if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];


    $delete_quary = "DELETE FROM mails WHERE id='$id'";

    mysqli_query($db_connect,$delete_quary);

    $_SESSION['mail_delete'] = 'Mail Delete Successfully';
    header("location: mail_show.php");

}

//================== update(edit) session end ==================


// composer require phpmailer/phpmailer  (commmand install korte hobe)
?>