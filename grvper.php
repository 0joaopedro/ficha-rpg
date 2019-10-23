<?php
   require("include/lib.php");
   head();
   $db=new banco();
   seguranca();
   if($_GET['exc']){
       $db->grava("delete from personagem where codper=$_GET[exc]",
        "Personagem Excluído",
        "Erro ao excluir o Personagem",
        "principal.php");
    }elseif($_POST['codper']){
       $db->grava("update personagem set nomper='$_POST[nomper]',claper='$_POST[claper]',racper='$_POST[racper]', where codper=$_POST[codper]",
          "Personagem Alterado",
          "Erro ao alterar o Personagem",
          "principal.php");
    }else{
       $db->grava("insert into personagem (nomper,claper,racper) values ('$_POST[nomper]','$_POST[claper]','$_POST[racper]');",
          "Personagem Inserido",
          "Erro ao inserir o Personagem",
          "principal.php");
   }      
   foot();
