

<?php
   $cnx=pg_connect("host=hard.uniguacu.edu.br dbname=professor user=professor password=prof");
   $res=pg_query("delete from produto where codpro=$_GET[exc]");
   if($res){
       echo("<script>alert('excluído com sucesso');document.location='index.php';</script>");
   }else{
       echo("<script>alert('erro ao excluir');</script>");
   }
?>
