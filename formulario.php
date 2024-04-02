<?php

    $nome = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $emailDestino = "vbatista.dev@gmail.com";
    $assunto = "Mensagem novas - Victor Batista";

    $estruturaEmail = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabecalhoEmail = "From: vbatista.dev@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($emailDestino,$assunto,$estruturaEmail,$cabecalhoEmail)){
        echo("E-mail Enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>