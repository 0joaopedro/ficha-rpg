





<?php
   $db=new banco();
   $db->consulta("select * from grupo order by desgru");
   $db->cheader=array('Código','Descrição do Grupo','Opções');
   $db->lista2('grupo','frmgru.php','frmgru.php','grvgru.php');
?>