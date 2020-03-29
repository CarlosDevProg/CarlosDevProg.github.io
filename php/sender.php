<?php

// Destinatário
$para = "carlos1992.ces@gmail.com";

// Assunto do e-mail (Para futuras implementações)
//$assunto = "Contato do através do site ...";

// Campos do formulário de contato
$nome = $_POST['name'];
$email = $_POST['email'];
// $telefone = $_POST['tel'];(Para futuras implementações)
$mensagem = $_POST['content'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "Nome: $nome ";
$corpo .= "Email: $email Mensagem: $mensagem";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome) && !empty($email) && !empty($mensagem)) {
    mail($para, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('https://curriculocarlos.000webhostapp.com/contato.html');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('https://curriculocarlos.000webhostapp.com/contato.html');</script>";
}
?>