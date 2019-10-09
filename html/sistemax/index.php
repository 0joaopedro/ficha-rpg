<?php
   require("include/lib.php");
   head();
   $frm=new form('ACESSO AO SISTEMA','valida.php','post');
   $db=new banco();
   $db->consulta("select codusu,nomusu from usuario order by nomusu");
   $frm->dbselect('codusu','Usuário',$db->res,'*');
   $frm->password('senusu','Senha',20,20,'*');
   $frm->show('frm');
   foot();
?>
