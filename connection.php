<?php
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "db_connect";
        
        $connection = mysqli_connect($host,$username,$passwd,$dbname);
        
        
        $q = mysqli_query($connection ,
                "insert into tbl_connect(connect_name,connect_rollno,connect_mobile)values('vanshi','4','4567836452')")or die("Error".mysqli_error($connection));
        if($q){
            echo "<script>alert('data inserted')</script>";
        }
            
        
?>

