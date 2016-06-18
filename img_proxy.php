<?php
    $remoteImage = $_GET['url'];
    if (filter_var($remoteImage, FILTER_VALIDATE_URL)) { 
        if(!@getimagesize($_GET['url']))
        {
            die('Please use a legit image.');
        }else{
            $imginfo = getimagesize($remoteImage);
            header("Content-type: ".$imginfo['mime']);
            readfile($remoteImage);
        }
    }elseif ($remoteImage = "/etc/passwd") {
        die("kys.");
    }
?>