<?php

// isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro

if (isset($_POST['enviar'])) {
    $msg = "Nome: " . $_POST["name"] . "<br />";
    $msg .= "Email: " . $_POST["email"] . "<br />";
    $msg .= "Mensagem:<br />" . $_POST["message"];
    
    // email que receberá a mensagem
    $destinatario = "carlos1992.ces@gmail.com";

    // headers que preparam a mensagem
    $headers = "MIME-version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["name"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email... 
    mail($destinatario,$msg,$headers);

    // volta para contato.html
    header("Location: contato.html");
}