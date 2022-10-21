<?php

//if(isset($_POST['name'])) && !empty($_POST['name']);

$nome = addslashes($_POST['name']);
$assunto = addslashes($_POST['subject']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['phone']);
$mensagem = addslashes($_POST['message']);

$to = "solucoes.rgr@gmail.com";
$subject = "Contato - RGR";
$body = "Nome: ".$nome. "-\n".
        "Telefone:" .$telefone."\n" .
        "Email:" .$email."\n" .
        "Mensagem:" .$mensagem.

$header = "From:soluçoes.rgr@gmail.com"."\r\n".
            "Reply-to:".$email. "\e\n".
            "X=Mailer:PHP/".phpversion();
            
if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso!");
}else{
  echo("O Email não pode ser enviado");
}       

?>
