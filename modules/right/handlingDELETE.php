<?php
  require('connectMySQL.php');
    $id_list=$_GET['id_list'];
   $query ="delete from list where id_list='$id_list'";
   $result =mysqli_query($connect,$query);
    header('location:../../index.php?read=leftright');
?>