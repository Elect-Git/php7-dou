<?php 

require_once("config.php");//chamar o id que eu pedir...

$yasmin = new Usuario();

$yasmin->loadById(1);//...aqui

echo $yasmin;



/*$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuarios");

echo json_encode($usuarios);        <--- para mostrar toda a lista*/

 ?>