<?php
    $db = pg_connect('host=localhost dbname=mercadoria user=postgres password=');

    $codigo = pg_escape_string($_POST['codigo']);
    $tipo = pg_escape_string($_POST['tipo']);
    $nome = pg_escape_string($_POST['nome']);
    $quantidade = pg_escape_string($_POST['quantidade']);
    $preco = pg_escape_string($_POST['preco']);

    $query = "INSERT INTO mercadoria(codigo, tipo, nome, quantidade, preco) VALUES('" . $codigo . "', '" . $tipo . "', '" . $nome . "', '" . $quantidade . "', '" . $preco . "')";
    $result = pg_query($query);
    if (!$result) {
		$errormessage = pg_last_error();
        echo "Erro na inserção: " . $errormessage;
        exit();
    }
    pg_close();
?> 