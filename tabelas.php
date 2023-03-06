<?php

function select_roupas() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM roupas");
	$sth->execute();
	return $sth->fetchAll();
}

function select_clientes() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM cliente INNER JOIN roupas WHERE cliente.id_roupa = roupas.id_roupas;");
	$sth->execute();
	return $sth->fetchAll();
}

function inserir() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO cliente (id_cliente, id_roupa, nome, sobrenome, data, cpf, tel) VALUES (NULL, :roupa, :nome, :sobrenome, :data, :cpf, :tel);");
	$sth->bindValue(':nome', $_POST['nome']);
	$sth->bindValue(':roupa', $_POST['roupa']);
	$sth->bindValue(':sobrenome', $_POST['snome']);
	$sth->bindValue(':data', $_POST['datanasc']);
	$sth->bindValue(':cpf', $_POST['cpf']);
	$sth->bindValue(':tel', $_POST['tel']);
	$sth->execute();
	return $sth->fetchAll();
}

function deletar() {
	global $conn;
	$sth = $conn->prepare("DELETE FROM cliente WHERE id_cliente = :id_cliente");
	$sth->bindValue(':id_cliente', $_POST['id_cliente']);
	$sth->execute();
	return $sth->fetchAll();
}
?>
