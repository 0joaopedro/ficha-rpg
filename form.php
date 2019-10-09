<?php
require "include/lib.php";
head();

$db=new banco();
$frm = new form('Usuários', 'index.php');
// $frm->text('nomusu', 'nome', 50, 45, '*');
// $frm->password('senusu', 'senha', 30, 30, '*');
// $frm->time('hora', 'hora', '*');
// $frm->date('nomusu', 'data', '*');
$frm->select('nomusu', 'Nomes', array('mat', 'vesp', 'not'));
$frm->radio('sexo', 'sexo', array('m', 'f'), array('masc', 'fem'));

$db->consulta('select id, nomusu from usuario');
$frm->dbselect('id', 'usuario', $db->res, '*');

$db->consulta("select * from usuario");
$frm->carrega($db->res);
$frm->show('frm');

foot();
?>