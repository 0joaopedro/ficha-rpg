<?php
   require("include/lib.php");
   head();
   $db=new banco(); 
   seguranca();
   $frm=new form('Criação de Personagem','grvper.php','post');
   $frm->hidden('codper');
   $frm->text('nomper','Nome do Personagem',50,40,'*');
   $db->consulta("select * from classe order by nomcla"); 
   $frm->dbselect('claper','Classe do personagem',$db->res,'*');
   $db->consulta("select * from raca order by nomrac"); 
   $frm->dbselect('racper','Raça do personagem',$db->res,'*');
   if($_GET['alt']){
      $db->consulta("select * from personagem where codper=$_GET[alt]"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
?>   
