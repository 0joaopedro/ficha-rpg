



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
   }elseif($_GET['pag']=='cadcla'){
      require("cadcla.php");
   }elseif($_GET['pag']=='cadper'){
      require("cadastro/cadper.php");
   }elseif($_GET['pag']=='cadrac'){
      require("cadrac.php");      
   }else{
      require("cadper.php");
   }
   foot();
?>
