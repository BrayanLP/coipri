<?php

class AnunciosProgramaciones {

    function __construct() {
        
    }

    public function listAnunciosProgramaciones() {
        $sql = 'SELECT CAT.id, CAT.dia, CAT.fecha, ANUN.imagen_anuncio 
                FROM categorias_programaciones as CAT 
                INNER JOIN anuncios_programaciones as ANUN
                WHERE CAT.id = ANUN.id_dia';
        $query = new Consulta($sql);
        ?>	 		
            <?php
            $w = 1;
            while ($row = $query->VerRegistro()) {
                $class = ($w % 2 == 0) ? "schedule-curCol" : "";
                ?>
                <div class="schedule-info-col <?php echo $class; ?>" style="width: 228px; display: block; ">
                    <a class="schedule-highlight-image" title="" href="programaciones-overlays.php?id=<?php echo $row['id']?>" rel="#over-slider" >
                        <img height="102" width="228" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_anuncio'])){echo $row['imagen_anuncio'];}else{echo "publica-azul-programacion.jpg";} ?>" alt="<?php echo $row['empresa']?>" title="<?php echo $row['empresa']?>" />
                    </a>
                    <h5><?php echo $row['dia']?> <?php  echo formatoDiaMes('-',$row['fecha'])?></h5>
                    <?php
                        $jueves = new Programaciones();
                        $jueves->listProgramaciones($row['id']);
                    ?>
                </div>
                <?php
                $w++;
            }
    }

    public function listAnunciosProgramacionesOverlay($param) {
        $query = new Consulta("
            SELECT id, empresa, nombre_evento, fecha, hora, direccion, 
                   precio, edad, descripcion, id_dia, imagen, url 
            FROM anuncios_programaciones 
            WHERE id_dia = ". $param ." ");
        
        while ($row = $query->VerRegistro()) {
            ?>
             <div class="cont-over-slider">
                    <h3 class="bebas"><?php echo $row['nombre_evento'] ?></h3>
                    <p><strong>Empresa:</strong></p>
                    <p><?php echo $row['empresa']?></p>
					<div class="espacio"></div>
					<p><strong>Fecha:</strong></p>
					<p><?php echo fecha_long($row['fecha']) ?></p>					
                    <div class="espacio"></div>
                    <p><strong>Hora:</strong></p>
                    <p><?php echo $row['hora'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Dirección:</strong></p>
                    <p><?php echo $row['direccion'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Mínimo de edad:</strong></p>
                    <p><?php echo $row['edad'] ?></p>
                    <div class="espacio"></div>					
                    <p><strong>Precios:</strong></p>
                    <p><?php echo $row['precio'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Descripción:</strong></p>
                    <?php echo $row['descripcion'] ?>                  
                </p><br/>
                <hr /><br/>
                <p>
                    <img style="width: 462px;" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen'])){echo $row['imagen'];}else{echo "foto-overlay-program.jpg";} ?>" alt="<?php echo $row['nombre_evento']?>" title="<?php echo $row['nombre_evento']?>"/>
                </p>
                <div class="espacio"></div>
                <p>
                    <a href="<?php echo $row['url'] ?>" title="<?php echo $row['empresa'] ?> " target="_blank"><?php echo $row['url'] ?> </a>
                </p>
                <div class="espacio"></div>
            </div>
            <?php
        }
    }      

}