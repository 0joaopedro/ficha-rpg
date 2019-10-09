





<?php
   $db=new banco();
   $db->consulta("select codpro,despro,desgru,qtdpro,valpro from produto join grupo on grupro=codgru order by despro");
   $db->cheader=array('Código','Descrição do Produto','Grupo','Qtd','Valor','Opções');
   $db->lista2('produto','frmpro.php','frmpro.php','grvpro.php');
?>