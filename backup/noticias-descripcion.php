<?php
    include("inc.aplication_top.php");
    $id = $_GET['id'];
    $listnotId = new Noticias();
    $listnotId->listNoticiasId($id);
?>