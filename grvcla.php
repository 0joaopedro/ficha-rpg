<?php
   require("include/lib.php");
   head();
   $db=new banco();
   seguranca();
   if($_GET['exc']){
       $db->grava("delete from classe where codcla=$_GET[exc]",
        "Classe Excluída",
        "Erro ao excluir a Classe",
        "principal.php?pag=cadcla");
    }elseif($_POST['codcla']){
       $db->grava("update classe set nomcla='$_POST[nomcla]',vidcla='$_POST[vidcla]' where codcla=$_POST[codcla];",
          "Classe Alterada",
          "Erro ao alterar a Classe",
          "principal.php?pag=cadcla");
    }else{
       $db->grava("insert into classe (nomcla,vidcla) values ('$_POST[nomcla]','$_POST[vidcla]');",
          "Classe Inserida",
          "Erro ao inserir a Classe",
          "principal.php?pag=cadcla");
   }      
   foot();
