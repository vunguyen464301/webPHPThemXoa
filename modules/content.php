<div class="content">
    <?php
        if(isset($_GET['read'])){
            $tam=$_GET['read'];
        }else{
            $tam='';
        }if($tam=='readall'){
            include('modules/listview.php');
        }else if($tam=='leftright'){
            include('modules/left/add.php');
            include('modules/right/listitem.php');
        }else{
            include('modules/listview.php');
        }
    ?>    
</div>