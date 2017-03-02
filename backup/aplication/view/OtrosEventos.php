<?php

class OtrosEventos {

    function __construct() {
        
    }

public function listOtrosEventos() {
    $sql = 'SELECT * FROM otros_eventos ORDER BY fecha ASC';
    $query = new Consulta($sql);
    //$format = new Fecha();
    ?>
    <div class="actividades">
        <span class="cierra"></span>
        <ul class="paging">
            <?php
			$i=0;
            while ($row = $query->VerRegistro()) {
                    if($i%6==0){
						echo '<li>';
					}
					?>						
					<div class="listas-activ">
							<div class="titulo">
								<strong><?php echo fecha_long($row['fecha']) ?> - <?php echo $row['hora'] ?></strong><br/>
								<h5><?php echo $row['nombre_evento'] ?></h5>
								<span>Empresa:</span><br/>
								<p><?php echo $row['empresa'] ?></p>
								<span>Dirección:</span><br/>
								<p><?php echo $row['direccion'] ?><br/>
								<?php echo $row['distrito'] ?></p>
								<span>Teléfonos:</span><br/>
								<p><?php echo $row['telefono'] ?></p>
								<span>Mínimo de edad:</span><br/>
								<p><?php echo $row['edad'] ?></p>
								<span>Precios:</span><br/>
								<p><?php echo $row['precio'] ?></p>
							</div>
							<div class="conte">
								<div class="text-finn">
								<?php echo $row['descripcion'] ?>
								</div>
								<div class="linkk">
									<a href="<?php echo $row['url'] ?>" title="<?php echo $row['empresa'] ?>" target="_blank"><?php echo $row['url'] ?></a>
								</div>
							</div>
						</div> 
					<?php
					$i++;
					if($i%6==0){
						echo '</li>';
					}
					
            }
            ?>
        </ul>
        <div class="slidetabs">
            <?php
            $cantidad = $query->NumeroRegistros();
			if ($cantidad > 0) {
				echo "<a href=\"#\">1</a>";
			}
			if ($cantidad > 6) {
				echo "<a href=\"#\">2</a>";
			}
			if ($cantidad > 12) {
				echo "<a href=\"#\">3</a>";
			}
			if ($cantidad > 18) {
				echo "<a href=\"#\">4</a>";
			}			
			if ($cantidad > 24) {
				echo "<a href=\"#\">5</a>";
			}
			if ($cantidad > 30) {
				echo "<a href=\"#\">6</a>";
			}
            ?>
        </div>                
    </div> 
    <?php
}
}