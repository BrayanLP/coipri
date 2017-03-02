<?php

class BienestarSociales {

    function __construct() {
        
    }

    public function listBienestarSociales() {
        $sql = 'SELECT * FROM bienestar_social';
        $query = new Consulta($sql);
            while ($row = $query->VerRegistro()) {
                ?>
                <h4 class="widget-title tabs"><?php echo $row['titulo'] ?></h4>
                <div class="comprometidos">
                    <img style="width: 309px;" src="aplication/webroot/imgs/fotos/<?php echo $row['imagen1'] ?>" alt="Comprometidos" title="Comprometidos"/><br/><br/>
                    <img style="width: 309px;" src="aplication/webroot/imgs/fotos/<?php echo $row['imagen'] ?>" alt="" title="" /><br/><br/>
                    <strong><?php echo $row['sub_titulo'] ?></strong><br /><br />
                    <?php echo $row['descripcion'] ?>
                </div>                
                
        <?php
        }

    }
}