<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="icon" type="image/x-icon" href="media/media-icon.png"/>
    <!-- BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <h1>Video</h1>
    <br>
    <video controls width="960" height="540">
	    <source src="./media/no-choice.mp4" type="video/webm">
	    Dieser Browser unterstützt das HTML5 Video-Element nicht.
    </video>
</body>
</html>