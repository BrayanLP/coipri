<?php

class Programaciones {

    function __construct() {
        
    }

    public function listProgramaciones($param) {
        $sql = '
            SELECT PRO.id, PRO.empresa, PRO.distrito, PRO.tipo, PRO.titulo, PRO.descripcion, 
            PRO.id_dia, PRO.hora, PRO.telefono, PRO.direccion, PRO.edad, PRO.precio, PRO.url, CAT.dia, CAT.fecha 
            FROM programaciones as PRO INNER JOIN categorias_programaciones as CAT 
            WHERE PRO.id_dia = CAT.id AND PRO.id_dia = ' . $param;
        $query = new Consulta($sql);
        //$format = new Fecha();
        ?>
        <dl>
            <?php
            $hora = date('m:s a');
            $w = 1;
            while ($row = $query->VerRegistro()) {
                $class = ($w % 2 == 0) ? "oddDT" : "";
                ?>
            <dd onclick="javascript:mostrar('<?php echo $row['id'] ?>')" style="cursor: pointer; position: relative; top: 0px; left: 0px; min-height: 80px; <?php if($row['hora'] == $hora){echo 'background: #333';} ?>" class="desplega <?php echo $class ?>" id="<?php echo $row['id'] ?>">
                <?php if($row['hora'] == $hora){echo '<div class="ahora">Ahora</div>';} ?>
                <div class="schedule_movie_title <?php if($row['hora'] == $hora){echo 'schedule_movie_title_1';} ?>">
                    <?php echo $row['titulo'] ?> <br/>
                    <p class="city" <?php if($row['hora'] == $hora){echo 'style="display:none"';} ?>><?php echo $row['distrito'] ?></p>
                </div>
                <div class="hora">
                    <span class="schedule_time <?php if($row['hora'] == $hora){echo 'schedule_time_1';} ?>"><?php echo $row['hora'] ?></span>                                                
                </div>                                                  

                <div id="schedule-show-metadata" class="<?php echo $row['id'] ?>" <?php if($row['hora'] == $hora){echo 'style="display: none;"';}else{echo 'style="display: none;"';} ?> >

                    <p class="schedule_gender">Empresa:</p>
                    <p class="schedule_desc_title"><?php echo $row['empresa'] ?></p>

                    <p class="schedule_desc">Teléfonos:</p>
                    <p class="schedule_desc_title"><?php echo $row['telefono'] ?></p>

                    <p class="schedule_desc">Dirección:</p>
                    <p class="schedule_desc_title"><?php echo $row['direccion'] ?> <br/> <?php echo $row['distrito'] ?></p>

                    <p class="schedule_desc">Mínimo de edad:</p>
                    <p class="schedule_desc_title"><?php echo $row['edad'] ?></p>

                    <p class="schedule_desc">Precios:</p>
                    <p class="schedule_desc_title"><?php echo $row['precio'] ?></p>

                    <p class="schedule_desc">Página web:</p>
                    <p class="schedule_desc_title"><a href="<?php echo $row['url'] ?>" targt="_blank" title="<?php echo $row['url'] ?>"><?php echo $row['url'] ?></a></p>
                    <div class="schedule-show-metadata-vermas" >
                        <a class="muestratool">Ver más</a>
                        <div class="tool">
                            <p>
                                <?php echo $row['descripcion'] ?>
                            </p>
                        </div>
                    </div>  

                </div>    

            </dd>
                <?php
                $w++;
            }
            ?>               
        </dl>    
        

        <?php
    }
  

}