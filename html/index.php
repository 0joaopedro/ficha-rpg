

<?php
   $cnx=pg_connect("host=hard.uniguacu.edu.br dbname=professor user=professor password=prof");
   $res=pg_query("select * from produto");
   while($reg=pg_fetch_object($res)){
      echo("<a href=\"excluir.php?exc=$reg->codpro\">Excluir</a> ");
      echo("$reg->despro<br>");
   }
?>
