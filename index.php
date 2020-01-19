<?php

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

//carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("user2", "321");
//echo $usuario;

$aluno = new Usuario("zabomga", "kkk");

$aluno->insert();

echo $aluno;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>