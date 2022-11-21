<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = ($_POST['nome']);
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'developerale@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$ddd      	   	   = $_POST['ddd'];
$telefone      	   = $_POST['telefone'];
$assunto          = $_POST['assunto'];
$mensagem          = $_POST['mensagem'];
 

 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.BENATVANS.COM.BR</P>
<p><b>Nome:</b> '.$nomeremetente.'
<p><b>E-Mail:</b> '.$emailremetente.'
<p><b>DDD:</b> '.$ddd.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> <pre>'.$mensagem.'</pre></p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n"; // remetente
$headers .= "Return-Path: suporte@chronos-tech.com.br\r\n"; // return-path
$envio = mail("contato@benatvans.com.br", $assunto, $mensagemHTML, $headers); // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web


 
if($envio){
echo "<script>alert('Mensagem enviada');</script>"; // Página que será redirecionada
 }
 echo "<script>window.location.href='index.html'</script>";
?>