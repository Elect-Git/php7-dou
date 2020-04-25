<?php 

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("porofessora", "prof");

echo $usuario;


/*$aluno = new Usuario("alunin", "saaski");

$aluno->insert();  ----->Criando um novo usuario

echo $aluno;*/


/*$usuario = new Usuario();  --->confere login e senha

$usuario->login("yasmin","Brunin");

echo $usuario;*/


/*$search = Usuario::search("hi");  ---> Pesquisar

echo json_encode($search);*/


/*$lista = Usuario::getList();<----- Lista todos os usuarios

echo json_encode($lista);*/



/*$yasmin = new Usuario();chamar o usuario (somente 1) que eu pedir...

$yasmin->loadById(1);...aqui

echo $yasmin;*/



/*$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuarios");

echo json_encode($usuarios);        <--- para mostrar toda a lista*/

 ?>