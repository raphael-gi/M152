<?php
$dir = '../media/scale/thumbnails/';
$files = scandir($dir);

function getImg($files, $dir) {
    for ($i = 2; count($files) > $i; $i++){
        ?>
        <a href="gallery.php?m=<?php echo ($i-1) ?>"><img class=rounded mx-auto d-block id=images src="<?php echo $dir . ($i-1) . ".jpg" ?>"></a>
        <?php
        if (($i-1) % 3 == 0){
            echo "<br>";
        }
    }
}
function getBigImg() {
    if (isset($_GET["m"])) {
        ?>
        <img src="../media/scale/bilder/<?php echo $_GET["m"] ?>.jpg" id="big">
        <br>
        <br>
        <a href="delete.php?id=<?php echo $_GET["m"] ?>"><button class="butt del">Löschen</button></a>
        <?php
    }
}
function errors() {
    function pop($get, $message) {
        if ($_GET["error"] == $get){
            echo '<script>alert("' . $message . '");</script>';
        }
    }
    if (isset($_GET["error"])){
        pop("empty", "Wählen Sie eine Datei aus!");
        pop("big", "Wählen Sie eine kleinere Datei aus!");
        pop("type", "Wählen Sie eine JPEG Datei aus!");
    }
}