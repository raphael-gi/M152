<?php
if(isset($_POST["subm"])){
    //Variabeln
    $name = $_FILES["file"]["name"];
    $url = $_FILES["file"]["tmp_name"];
    $gros = $_FILES["file"]["size"];
    $type = explode(".", $name);

    $dir = '../media/scale/jpeg/';
    function send($message){
        header("location: gallery.php?error=" . $message);
        exit();
    }
    //Error Handling
    if (empty($name)){
        send("empty");
    }
    if ($gros > 500000){
        send("big");
    }
    if (end($type) != "jpg" && end($type) != "jpeg"){
        send("type");
    }
    
    //File wird in den Ordner gesetzt
    if (file_exists($dir . $name)){
        $b = 1;
        while (TRUE){
            if (!file_exists($dir . $type[0] . $b . "." . end($type))){
                move_uploaded_file($url, $dir . $type[0] . $b . "." . end($type));
                break;
            }
            else {
                $b++;
            }
        }
    }
    else{
        move_uploaded_file($url, $dir . $name);
    }
    header("location: resize.php");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}