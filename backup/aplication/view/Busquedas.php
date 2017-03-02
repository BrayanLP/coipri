<?php

class Busquedas {

    function __construct() {
        
    }
    
    public function listBusquedas($buscar) {

        $query = new Consulta("SELECT * FROM noticias WHERE
                texto LIKE '%$buscar%'
                ORDER BY id DESC");
        $con = 1;
        while ($row = $query->VerRegistro()) {
        ?>
        <div>
            <p class="archive_title">
                <?php echo $con;?>.- 
                <a style="color: black" href="noticia.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row['titulo'] ?>
                </a>
            </p>
            <p>
            <?php echo substr($row['texto_introduccion'], 0, 280) ?>                
            </p>
        </div>
        <div class="clearer"></div>
        <?php
        $con++;
        }  

    }

}
?>
