<?php
include("audio.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio</title>
    <link rel="icon" type="image/x-icon" href="../media/media-icon.png"/>
    <!-- BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a class="logo" href="../index.php"><img class="logo" src="../media/wgbs.png" alt="logo"></a>
        <a class="navlink" href="../p2web.php">P2</a>
        <a class="navlink" href="../gif.php">GIF</a>
        <a class="navlink" href="../gal/resize.php">Fotogalerie</a>
        <a class="navlink" href="audio.php?s=1">Audio</a>
        <a class="navlink" href="../video.php">Video</a>
        <a href="../journal.php"><button id="jb">Journal</button></a>
    </header>
    <h1>Audio</h1>
    <br>
    <div id="upb">
        <a href="nsong.php"><button class="butt upl">Hochladen</button></a>
        <a class="galdel" href="delsong.php?id=<?php echo $id ?>"><button class="butt del">Löschen</button></a>
    </div>
    <div id="parent">
        <a href="audio.php?s=<?php echo ($id-1) ?>"><button class="skip"><i class="icon bi bi-arrow-left"></i></button></a>
        <div id="play">
            <h4 id="listen">Sie hören: <?php echo $dir_name ?></h4>
            <img src="../media/<?php if (count($n_scan_my_dir) > 1){echo "playlist/" . $dir_name . "/1.jpg";}else {echo "no-img.png";} ?>" id="cover">
            <br>
            <audio id="aud" controls>
                <source src="../media/playlist/<?php echo $dir_name ?>/1.mp3" type="audio/mpeg">
	            Ihr Browser unterstützt dieses Audioformat nicht.
        </div>
        <a href="audio.php?s=<?php echo ($id+1) ?>"><button class="skip"><i class="icon bi bi-arrow-right"></i></button></a>
    </div>
</audio>
</body>
</html>