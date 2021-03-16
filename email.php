<?php
		
	$para="wsalesg@hotmail.com";
	$assunto="Interesse em Projeto";
    $nome = $_REQUEST["name"];
    $email = $_REQUEST["emailAddress"];
    $ass = $_REQUEST["subject"];
    $msg = $_REQUEST["message"];
	
		$corpo ="<strong> Mensagem de Contato</strong><br><br>";
		$corpo .="<br><strong> Nome: </strong> $nome";
		$corpo .="<br><strong> Email: </strong> $email";
		$corpo .="<br><strong> Assunto: </strong> $ass";
		$corpo .="<br><strong> Mensagem: </strong> $msg";
		
	$header="From: $email Reply-to: $email";
	$header .="Content-Type: text/html; charset= utf-8";
	
	mail($para,$assunto,$corpo,$header);
	
?>