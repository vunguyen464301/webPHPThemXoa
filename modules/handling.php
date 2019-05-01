<?php
  require('connectMySQL.php');
  $namelist=$_POST['namelist'];
    $add=$_POST['add'];
    if($namelist!=""){
   $query ="insert into list values(null,'$namelist')";
   $result =mysqli_query($connect,$query);
     echo 'đã thành công';
  }
  else if(isset($_POST['delete'])){
      //xoa
    echo "xoas";
    }else {
      //xoa
  }
 header('location:../index.php?read=leftright');
  // echo $_POST['delete'];
?>