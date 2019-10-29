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
//$usuario = new Usuario();
//$usuario->login("renan","akzlk3");
//echo $usuario;

//Criando um novo usuario
//$aluno = new usuario("bruna","@alunobruna");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->update("professor Luis","$%DA23S3*&");
echo $usuario;

?>