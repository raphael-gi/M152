<?php
include("gallery.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotogalerie</title>
    <link rel="icon" type="image/x-icon" href="../media/media-icon.png"/>
    <!-- BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a class="logo" href="../index.php"><img class="logo" src="../media/wgbs.png" alt="logo"></a>
        <a class="navlink" href="../p2web.php">P2</a>
        <a class="navlink" href="../gif.php">GIF</a>
        <a class="navlink" href="resize.php">Fotogalerie</a>
        <a class="navlink" href="../aud/audio.php?s=0">Audio</a>
        <a class="navlink" href="../video.php">Video</a>
        <a href="../journal.php"><button id="jb">Journal</button></a>
    </header>
    <h1>Fotogalerie</h1>
    <br>
    <form class="formula" action="add.php" method="POST" enctype="multipart/form-data">
        <input class="form-control" type="file" name="file" required>
        <input class="butt upl galdel" name="subm" type="submit" value="Hochladen">
    </form>
    <div class="gal">
        <div class="small">
            <?php
            getImg($files, $dir);
            ?>
        </div>
        <div class="big">
            <?php
            getBigImg();
            ?>
        </div>
    </div>

    <?php
    errors();
    ?>
</body>
</html>