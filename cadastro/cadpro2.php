<?php
   $db=new banco();
   $frm=new form('','principal.php?pag=cadpro2');
   $db->consulta("select * from grupo order by desgru"); 
   $frm->dbselect('grupro','Grupo do Produto',$db->res,'*');
   $frm->show('frm',"<input style=\"width:100px\" class=\"btn btn-warning\"  type=\"submit\" value=\"OK\">");
   echo("<br>");
   $db->consulta("select codpro,despro,desgru,qtdpro,valpro from produto join grupo on grupro=codgru order by despro");
   $db->cheader=array('Código','Descrição do Produto','Grupo','Qtd','Valor','Opções');
   $db->lista2('produto','frmpro.php','frmpro.php','grvpro.php');
?>