<?php

require('conector.php');

$con = new ConectorBD();
$con->initConexion('agenda');

$hash = password_hash('12345', PASSWORD_DEFAULT);

$data['username']= '"marymartines@mail.com"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"Mary Martines"';
$data['fecha_nacimiento']='"1985-04-05"';

$con->insertData('usuarios', $data);




 ?>
