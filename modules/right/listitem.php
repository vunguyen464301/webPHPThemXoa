<?php
require 'connectMySQL.php';
    class list1{
        function list1($id_list,$namelist){
            $this->id_list=$id_list;
            $this->namelist=$namelist;
        }
    }
    $query ="select*from list";
    $result =mysqli_query($connect,$query);
    $mangketqua =array();
    
    //echo json_encode($mangketqua=>array(""server_response));
?>
<div class="right"> 
            <p>List View</p>
          
            <?php while ($row =mysqli_fetch_assoc($result)): ?>
             
                    
                    <?php echo $row['id_list'] ?>
                    <?php echo $row['namelist'] ?>
                    <a href="modules/right/handlingDELETE.php?id_list=<?php echo $row['id_list'] ?>" >
                    <img src="imgs/delete.jpg">
                    </a>   
                    <br>
        <?php endwhile; ?> 
    
                       
</div>