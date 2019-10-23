<?php
   require("include/lib.php");
   head();
   $db=new banco(); 
   seguranca();
   $frm=new form('Criação de Classe','grvcla.php','post');
   $frm->hidden('codcla');
   $frm->text('nomcla','Nome da Classe',30,30,'*');
   $frm->text('vidcla','Dado de Vida da classe',30,30,'*');
   if($_GET['alt']){
      $db->consulta("select * from classe where codcla=$_GET[alt]"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
?>   
