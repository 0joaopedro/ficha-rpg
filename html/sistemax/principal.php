



<?php
   require("include/lib.php");
   head();
   require("topo.php"); 
   if($_GET['pag']=='cadgru'){
      require("cadgru.php");
   }elseif($_GET['pag']=='cadusu'){
      require("cadusu.php");
   }elseif($_GET['pag']=='cadpro'){
      require("cadpro.php");
   }elseif($_GET['pag']=='cadpro2'){
      require("cadpro2.php");
   }elseif($_GET['pag']=='a'){
      require("a.php");
   }else{
      require("corpo.php");
   }	 
   foot();
?>
