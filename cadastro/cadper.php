<?php
$db = new banco();
$db->consulta("select codper,nomper,claper,racper from personagem join classe on claper=codcla order by nomper");
$db->cheader = array('Código', 'Nome do Personagem', 'Classe', 'Raca', 'Opções');
$db->lista2('personagem', 'frmpro.php', 'frmpro.php', 'grvpro.php');
