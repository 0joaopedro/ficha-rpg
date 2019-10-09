



<?php
   require("include/lib.php");
   head();
   $db=new banco(); 
   seguranca();
   $frm=new form('Formulário de Grupos','grvgru.php','post');
   $frm->hidden('codgru');
   $frm->text('desgru','Nome do Grupo',50,40,'*');
   if($_GET['alt']){
      $db->consulta("select * from grupo where codgru=$_GET[alt]"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
?>   
