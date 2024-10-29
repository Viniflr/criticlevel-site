<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['texto'];

    // Endereço de email para onde a mensagem será enviada
    $destinatario = "criticlevelstartup@gmail.com";
    
    // Assunto do email
    $assunto = "Nova mensagem do formulário de contato";

    // Corpo do email
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Celular: $celular\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Cabeçalhos para o envio do email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envia o email
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente.";
    }
}
?>