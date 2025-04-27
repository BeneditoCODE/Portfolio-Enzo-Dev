<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$email) {
        echo "E-mail inválido!";
        exit;
    }

    $para = "enzobenedito95@gmail.com";
    $assunto = "Entrar Em Contato - Portfolio";
    $corpo = "Nome: $nome\nE-mail: $email\nWhatsapp: $telefone\nMensagem: $mensagem";

    $cabeca = "From: enzo.medeiros@aluno.senai.br\r\n" .
        "Reply-To: $email\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail!";
    }
?>