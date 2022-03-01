<?php
//etesal be paygahe dade
    $connection = mysqli_connect("localhost","root","","happy_family" ); 
    mysqli_query($connection, "SET CHARACTER SET utf8");
    if(mysqli_connect_errno()==0)
    {
     //   echo "همه چی ارومه";
    }
    else
    {
        echo "خطایی رخ داده" ;
        echo mysqli_connect_error();
        
    }

?>