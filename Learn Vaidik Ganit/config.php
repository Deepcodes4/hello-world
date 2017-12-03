<?php
    define('SERVER','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','test');


    $conn = mysqli_connect(SERVER,USER,PASS,DB);

    if(!$conn == true){
        die("Sorry: there is an error. Couldn't connect database" . mysqli_connect_error());

    }
?>