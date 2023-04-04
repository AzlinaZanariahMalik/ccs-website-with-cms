<?php
use App\Models\Website_setting;

//PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//return college info
if(!function_exists('College_info')){
    function College_info(){
        return Website_setting::find(1);
    }
}

//PHP Mailer Function
if(!function_exists('sendMail')){
    function sendMail($mailConfig){
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('EMAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('EMAIL_USERNAME');
        $mail->Password = env('EMAIL_PASSWORD');
        $mail->SMTPSecure = env('EMAIL_ENCRYPTION');
        $mail->Port = env('EMAIL_PORT');
        $mail->setForm($mailConfig['mail_from_email'],$mailConfig['mail_from_name']);
        $mail->addAddress($mailConfig['mail_recipient_email'],$mailConfig['mail_recipient_name']);
        $mail->isHTML(true);
        $mail->Subject = $mailConfig['mail_subject'];
        $mail->Body = $mailConfig['mail_body'];

        if($mail->send()){
            return true;
        }else{
            return false;
        }
    }
}