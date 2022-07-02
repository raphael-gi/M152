<?php
if (isset($_POST["sub"])){
    //Variabeln werden abgerufen
    $name = $_POST["name"];
    $aud_name = $_FILES["audio"]["name"];
    $url = $_FILES["audio"]["tmp_name"];
    $bild_name = $_FILES["bild"]["name"];
    $bild_url = $_FILES["bild"]["tmp_name"];
    
    //Ordner wird definiert und durchsucht
    $dir = "../media/playlist";
    $scan_dir = scandir($dir);

    //Dateitypen werden abgerufen
    $type = explode(".", $aud_name);
    $bild_type = explode(".", $bild_name);
    $song_type = explode(".", $aud_name);

    //Error Handling
    if ($name == "" || $aud_name ==""){
        header("location: nsong.php?error=used");
        exit();
    }
    if (file_exists($dir . "/" . $name)){
        header("location: nsong.php?error=name_used");
        exit();
    }
    if ($song_type[1] != "mp3"){
        header("location: nsong.php?error=types");
        exit();
    }
    if (!isset($bild_name)){
        if ($bild_type[1] != "jpg"){
            header("location: nsong.php?error=type");
            exit();
        }
    }
    //Ordner wird erstellt und die Dateien werden in den Ordner getan
    mkdir($dir . "/" . $name, 0777);
    move_uploaded_file($url, $dir . "/" . $name . "/1." . end($type));
    if ($bild_name != NULL){
        move_uploaded_file($bild_url, $dir . "/" . $name . "/1." . end($bild_type));
    }
    header("location: audio.php?s=1");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}