



<?php
   require("include/lib.php");
   head();
   $db=new banco(); 
   seguranca();
   $frm=new form('Formulário de Produtos','grupos/grvpro.php','post');
   $frm->hidden('codpro');
   $frm->text('despro','Nome do Produto',50,40,'*');
   $frm->text('qtdpro','Quantidade Estocada',50,20,'*');
   $frm->text('valpro','Valor de Venda',50,20,'*');
   $db->consulta("select * from grupo order by desgru"); 
   $frm->dbselect('grupro','Grupo do Produto',$db->res,'*');
   if($_GET['alt']){
      $db->consulta("select * from produto where codpro=$_GET[alt]"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
?>   
