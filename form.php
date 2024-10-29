<?php
// Inclui o autoload do Composer
require 'vendor/autoload.php';

// Usa a classe PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['texto'];

    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor SMTP do Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'criticlevelstartup@gmail.com'; // Seu email Gmail
        $mail->Password = 'SUA_SENHA_DE_APP'; // Senha de App do Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipiente
        $mail->setFrom($email, $nome);
        $mail->addAddress('criticlevelstartup@gmail.com');

        // Conteúdo do email
        $mail->isHTML(false);
        $mail->Subject = 'Nova mensagem do formulário de contato';
        $mail->Body = "Nome: $nome\nEmail: $email\nCelular: $celular\nMensagem:\n$mensagem";

        $mail->send();
        echo "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem. Erro: {$mail->ErrorInfo}";
    }
}
?>