<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);


    $para = "enzobenedito95@gmail.com";
    $assunto = "Entrar Em Contato - Portfolio";
    $corpo = "Nome: ".$nome."\n"."E-mail; ".$email."\n"."Whatsapp: ".$telefone."\n"."Mensagem: ".$mensagem;


    $cabeca = "From: enzo.medeiros@aluno.senai.br"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHB/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");

    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }


    


?>