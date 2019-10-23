<?php
$db = new banco();
$db->consulta("select codrac, nomrac, desrac from raca order by nomrac");
$db->cheader = array('Código', 'Nome da Raça', 'Deslocamento da Raça', 'Opções');
$db->lista2('raca', 'frmrac.php', 'frmrac.php', 'grvrac.php');
