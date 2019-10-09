




<?php
   require("include/lib.php");
   head();
   $db=new banco();
   seguranca();
   if($_GET['exc']){
       $db->grava("delete from grupo where codgru=$_GET[exc]",
        "Grupo Excluído",
        "Erro ao excluir o grupo",
        "principal.php?pag=cadgru");
    }elseif($_POST['codgru']){
       $db->grava("update grupo set desgru='$_POST[desgru]' where codgru=$_POST[codgru]",
          "Grupo Alterado",
          "Erro ao alterar o grupo",
          "principal.php?pag=cadgru");
    }else{
       $db->grava("insert into grupo (desgru) values ('$_POST[desgru]');",
          "Grupo Inserido",
          "Erro ao inserir o grupo",
          "principal.php?pag=cadgru");
   }      
   foot();
?>   
