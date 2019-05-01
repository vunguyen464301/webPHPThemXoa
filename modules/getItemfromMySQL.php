<?php
require 'connectMySQL.php';
    
class list2{
        function list2($id_list,$namelist){
            $this->id_list=$id_list;
            $this->namelist=$namelist;
        }
    }
    $query ="select *from list";
    $result =mysqli_query($connect,$query);
    $mangketqua =array();
    while($dong =mysqli_fetch_assoc($result)){
        array_push($mangketqua,new list2($dong['id_list'],$dong['namelist']));
    }
        echo json_encode($mangketqua);
    //echo json_encode($mangketqua=>array(""server_response));
?>