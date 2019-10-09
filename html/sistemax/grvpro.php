




<?php
   require("include/lib.php");
   head();
   $db=new banco();
   seguranca();
   if($_GET['exc']){
       $db->grava("delete from produto where codpro=$_GET[exc]",
        "Produto Excluído",
        "Erro ao excluir o Produto",
        "principal.php?pag=cadpro");
    }elseif($_POST['codpro']){
       $db->grava("update produto set despro='$_POST[despro]',qtdpro='$_POST[qtdpro]',grupro='$_POST[grupro]',valpro='$_POST[valpro]' where codpro=$_POST[codpro]",
          "Produto Alterado",
          "Erro ao alterar o Produto",
          "principal.php?pag=cadpro");
    }else{
       $db->grava("insert into produto (despro,qtdpro,grupro,valpro) values ('$_POST[despro]','$_POST[qtdpro]','$_POST[grupro]','$_POST[valpro]');",
          "Produto Inserido",
          "Erro ao inserir o Produto",
          "principal.php?pag=cadpro");
   }      
   foot();
?>   
