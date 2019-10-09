<?php
   require("include/lib.php");
   $db=new banco();
   $db->consulta("select codusu,nomusu from usuario where codusu='$_POST[codusu]' and senusu=md5('$_POST[senusu]')");
   if($reg=@pg_fetch_object($db->res)){
      header("location:principal.php");
   }else{
      echo("<script>alert('Senha inválida...');document.location='index.php';</script>");
   }
?>
