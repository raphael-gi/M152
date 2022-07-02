<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIF</title>
    <link rel="icon" type="image/x-icon" href="media/media-icon.png"/>
    <!-- BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div>
        <h1>GIF</h1>
        <br>
    </div>
    <div class="wrapgif">
        <img width="300px" src="media/spin.gif">
        <div class="info">
            <h3>Hier sehen sie ein Wunderschönes GIF, welches mit <a target="_blank" class="text_link" href="https://www.blender.org">Blender</a> gemacht wurde.</h3>
            <h3>Der Schöpfer dieses Werkes ist <a target="_blank" class="text_link" href="https://github.com/Kenj-i">Kenji</a>.</h3>
            <h4>Der Name dieses GIFs ist: <em><?php echo basename("media/spin.gif", ".gif") ?></em></h4>
            <h4>Dieses GIF hat eine grösse von: <em><?php echo round((filesize("media/spin.gif") / 1048576), 3) ?></em> MB</h4>
        </div>
    </div>
</body>
</html>