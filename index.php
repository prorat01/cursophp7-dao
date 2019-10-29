<?php

require_once("config.php");

//carrega um usuario
//$renan = new Usuario();
//$renan->loadbyId(4);
//echo $renan;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("renan","akzlk3");
echo $usuario;

?>