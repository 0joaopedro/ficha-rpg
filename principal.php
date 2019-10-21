



<?php
   require("include/lib.php");
   head();
   require("include/topo.php"); 
   if($_GET['pag']=='cadgru'){
      require("cadastro/cadgru.php");
   }elseif($_GET['pag']=='cadusu'){
      require("cadastro/cadusu.php");
   }elseif($_GET['pag']=='cadpro'){
      require("cadastro/cadpro.php");
   }elseif($_GET['pag']=='cadpro2'){
      require("cadastro/cadpro2.php");
   }elseif($_GET['pag']=='cadper'){
      require("cadastro/cadper.php");
   }else{
      require("views/list_users.php");
   }
   foot();
?>
