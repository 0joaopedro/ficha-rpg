<?php
$db = new banco();
$db->consulta("select codcla, nomcla, vidcla from classe order by nomcla");
$db->cheader = array('Código', 'Nome da Classe', 'Dado de Vida', 'Opções');
$db->lista2('classe', 'frmcla.php', 'frmcla.php', 'grvcla.php');
