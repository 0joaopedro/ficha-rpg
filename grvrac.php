<?php
   require("include/lib.php");
   head();
   $db=new banco();
   seguranca();
   if($_GET['exc']){
       $db->grava("delete from raca where codrac=$_GET[exc]",
        "Raça Excluída",
        "Erro ao excluir a Raça",
        "principal.php?pag=cadrac");
    }elseif($_POST['codrac']){
       $db->grava("update raca set nomrac='$_POST[nomrac]',desrac='$_POST[desrac]', where codrac=$_POST[codrac]",
          "Raça Alterada",
          "Erro ao alterar a Raça",
          "principal.php?pag=cadrac");
    }else{
       $db->grava("insert into raca (nomrac,desrac) values ('$_POST[nomrac]','$_POST[desrac]');",
          "Raça Inserida",
          "Erro ao inserir a Raça",
          "principal.php?pag=cadrac");
   }      
   foot();
