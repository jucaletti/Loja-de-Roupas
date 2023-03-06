<?php

$email1 = $_POST["email"];
$email2 = "emaildelogin@gmail.com";

$senha1 = $_POST["senha"];
$senha2 = "12345";

if ($email1 == $email2 && $senha1 == $senha2){
 header ("Location: pagina.html");
} else {header ("Location: login.html");}
?>