<?php
   require("include/lib.php");
   head();
   $db=new banco(); 
   seguranca();
   $frm=new form('Criação de Raça','grvrac.php','post');
   $frm->hidden('codrac');
   $frm->text('nomrac','Nome da Raça',30,30,'*');
   $frm->text('desrac','Deslocamento da Raça',30,30,'*');
   if($_GET['alt']){
      $db->consulta("select * from raca where codrac=$_GET[alt]"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
?>   
