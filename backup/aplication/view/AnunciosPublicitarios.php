<?php

class AnunciosPublicitarios {

    function __construct() {
        
    }

    public function listAnunciosPublicitarios() {
        $sql = 'SELECT * FROM anuncios_publicitarios ORDER BY id ASC';
        $query = new Consulta($sql);
        $format = new Fecha();
        while ($row = $query->VerRegistro()) {
                ?>
            <div id="publicidad" style="display: none;" class="no">
                <span class="cerrar"></span>
                <p><img src="aplication/webroot/imgs/fotos/<?php echo $row['imagen'] ?>" alt="<?php echo $row['titulo'] ?>" title="<?php echo $row['titulo'] ?>"/>
                    <strong style="color: #F9C713;"><?php echo $row['titulo'] ?></strong>
                </p>    
                <div style="height: 70px;margin-top: 6px;">    
                    <?php echo substr($row['descripcion'], 0, 180) ?>
                </div>
                <p>
                    <a href="<?php echo $row['url'] ?>" title="<?php echo $row['titulo'] ?>" target="_blank"><?php echo $row['url'] ?></a>
                </p>
            </div>                
                <?php
             
            }
    }

}