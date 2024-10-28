<?php

    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $celular = addslashes($_POST["celular"]);
    $texto = addslashes($_POST["texto"]);

    $para = "criticlevelstartup@gmail.com";
    $assunto = "Rec'n Play - ";

    $corpo = $assunto."Nome:".$nome."<br>"."email:".$email."<br>"."celular:".$celular."<br>"."Mensagem enviada: <br>".$texto;

    $cabeca = "From: critclevelstartup@gmail.com"."<br>"."Reply-to: ".$email."<br>"."X=Mailer:PHP/". phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    }
    else{
        echo("Houve um erro ao enviar o email!");
    }

?>