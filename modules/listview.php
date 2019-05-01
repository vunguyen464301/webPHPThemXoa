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
?>
     <div class="listview">
          <p style="background-color:red">  Mã | TÊN DANH MỤC</p>
            <?php while ($row =mysqli_fetch_assoc($result)): ?>
            <ul>
            <li><?php echo $row['id_list'] ?></li>
                <li><?php echo $row['namelist'] ?></li>   
            </ul>
                <?php endwhile; ?> 
           
            
          
        </div>