<?php 

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/*Carrega um usuário
$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*Carrega uma lista de usuáricos buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Ana", "112233");
echo $usuario;
*/

/*Criando um novo usuário
$aluno = new Usuario("Edher", "guloseima");
$aluno->insert();
echo $aluno;
*/

/*Alterar um usuário
$usuario = new Usuario();
$usuario->loadbyId(9);
$usuario->update("Bruno", "escravo");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();

echo $usuario;

 ?>