<?php
use PHPMailer\PHPMailer\PHPMailer;


function send_email($name_to, $mail_to, $mail_subject, $mail_body) {

    $email="ashurahouse@gmail.com";

    $name=$name_to;
    $to=$email;
    $subject=$mail_subject;
    $body=$mail_body;

    $from="ashurahousemail@gmail.com";
    $password="holcavvokyqbhhus";

    require_once "phpMail/src/PHPMailer.php";
    require_once "phpMail/src/SMTP.php";
    require_once "phpMail/src/Exception.php";

    $email=new PHPMailer();

    $email->IsSMTP();
    $email->Host="smtp.gmail.com";
    $email->SMTPAuth=true;
    $email->Username=$from;
    $email->Password=$password;
    $email->Port=587;
    $email->SMTPSecure='tls';
    $email->smtpConnect([
        'ssl'=>[
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>true,
    ]
    ]);

    $email->isHTML(true);
    $email->setFrom($from, $name);
    $email->addAddress($to);
    $email->Subject=$subject;
    $email->Body=$body;

    if($email->send()) {
        header('Location: index.php?message=success');


    }
    else {
        echo "Error sending email".$email->ErrorInfo;
    }


}

if(isset($_POST['nom']) && isset($_POST['message']) && isset($_POST['email']) && isset($_POST['email'])){
    $nom=trim($_POST['nom']);
    $message_body=trim($_POST['message']);
    $email=trim($_POST['email']);
    $subject=trim($_POST['subject']);
    send_email($nom,$email,$subject,$message_body." Envoyer la reponse au : ".$email);

}


?>
