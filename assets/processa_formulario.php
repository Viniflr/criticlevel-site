<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclua o arquivo autoload do PHPMailer
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['texto'];

    // Configurações do e-mail
    $to = "criticlevelstartup@gmail.com";
    $subject = "Nova mensagem do formulário";
    $body = "Nome: $nome\nEmail: $email\nCelular: $celular\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Sua mensagem foi enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.";
    }
}
?>
