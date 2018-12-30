<?php

require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'exibe-mensagem.php';

$nome = $_POST['Nome'];
$idade = $_POST['Idade'];
$email = $_POST['Email'];
$telefone = $_POST['Telefone'];
$assunto = $_POST['Assunto'];
$mensagem = $_POST['Mensagem'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; 
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "ninesunifsp@gmail.com";
$mail->Password = "ninesun371";
$mail->setFrom("ninesunIFSP@gmail.com");
$mail->addAddress("ninesunIFSP@gmail.com");
$mail->Subject = "Email de contato NineSun";
$mail->msgHtml("<html>
        <b>de:</b> {$nome} <br/>
        <b>Assunto:</b>{$assunto}<br/> 
        <b>email:</b> {$email}<br/>
        <b>Idade:</b>{$idade}<br/>
        <b>Telefone:</b>{$telefone}<br/>
        <b>mensagem:</b>{$mensagem}");

if( $mail->Send()){
    write_msg('Mensagem enviada com sucesso','success');
    header('Location: ../view/fale_conosco.php');
}
else{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>