<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Lied</title>
    <link rel="icon" type="image/x-icon" href="../media/media-icon.png"/>
    <!-- BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a class="logo" href="../index.php"><img class="logo" src="../media/wgbs.png" alt="logo"></a>
        <nav>
            <ul class="list">
                <li><a id="link" href="../p2web.php">P2</a></li>
                <li><a id="link" href="../gif.php">GIF</a></li>
                <li><a id="link" href="../gal/resize.php">Fotogalerie</a></li>
                <li><a id="link" href="audio.php?s=1">Audio</a></li>
                <li><a id="link" href="../video.php">Video</a></li>
            </ul>
        </nav>
        <a href="../journal.php"><button id="jb">Journal</button></a>
    </header>
    <div>
        <h1>Neues Lied</h1>
        <br>
    </div>
    <form action="nsong.inc.php" method="POST" enctype="multipart/form-data">
        <div id="file_up">
            <label for="name">Name</label>
            <br>
            <input class="form-control" type="text" name="name" required>
            <br>
            <label for="audio">Audio</label>
            <br>
            <input class="form-control" type="file" name="audio" required>
            <br>
            <label for="bild">Bild</label>
            <br>
            <input class="form-control" type="file" name="bild">
        </div>
        <br>
        <br>
        <input class="butt upl" type="submit" name="sub" value="Hochladen">
    </form>
    <div>
        <br>
        <?php
        function pop($get, $message) {
            if ($_GET["error"] == $get){
                echo '<script>alert("' . $message . '");</script>';
            }
        }
        if (isset($_GET["error"])){
            pop("name_used", "Name wird bereits verwendet!");
            pop("required", "Füllen sie die notwendigen Felder aus!");
            pop("type", "Das Bild muss ein JPG sein!");
            pop("types", "Das Lied muss ein MP3 sein!");
        }
        ?>
    </div>
</body>
</html>