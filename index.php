<?php
    echo "This is a PHP Test! \n";
    if(isset($_SERVER['SERVER_ADDR'])){
        $serverip = $_SERVER['SERVER_ADDR'];
    }
    elseif(isset($_SERVER['LOCAL_ADDR'])){
        $serverip = $_SERVER['LOCAL_ADDR'];
    }
    echo "Serve IP is [ ".$serverip." ]\n\n";
   // phpinfo();
?>
