<?php

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");

    exit;
}
?>

<?php

session_start();

$_SESSION = array();

session_destroy();

header("location: login.php");
exit;
?> 