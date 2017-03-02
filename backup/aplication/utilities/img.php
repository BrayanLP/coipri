<?php

require_once("thumbnail.class.php");
$image = new Thumbnail("../webroot/imgs/".$_GET['archivo']."/".$_GET['imagen']);
$image->CreateThumbnail($_GET['w'],$_GET['h']);

?>