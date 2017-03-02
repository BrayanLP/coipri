<?php

class Inscritos {
    
    public $_fechas;

    public function listTarifas() {
        $fechaActual = date('Y-m-d');
		//$fechaActual = "2012-05-01";
        $fech = new Consulta('SELECT * FROM rango_fechas ORDER BY id ASC');
        $rof = $fech->VerRegistro();
        if($fechaActual <= $rof['fecha']){          
            $prigru = new Consulta('SELECT * FROM tarifas WHERE id_fecha = 1 ORDER BY id ASC');
            ?>
                <!--<p>
                    Estas tarifas estarán vigentes sólo hasta el 
                    <span>
                    <?php
                      /*  $fechy = new Consulta('SELECT * FROM rango_fechas WHERE id = 1');
                        while($rosy = $fechy->VerRegistro()){
                            echo fecha_long($rosy['fecha']);
                        }*/
                    ?>    
                    </span>. 
                    Si desea ver los costos pasada esta fecha, dirígase a nuestra sección de <span><a href="tarifa.php" title="Tarifas">Tarifas</a></span>.
                </p>-->
                <div class="clear"></div>
                <div class="tar-pre">
            <?php
            while($rop = $prigru->VerRegistro()){
                ?>
                <div class="presss">
                    <label>
                        <span><?php echo $rop['nombre']?>:</span> <?php if($rop['tipo_moneda']=="2"){echo "US$ ";}else{echo "S/. ";}?><?php echo $rop['monto']?>
                    </label>                      
                    <input type="radio" name="tarifa" id="<?php echo $rop['id']?>" value="<?php echo $rop['monto']?>" />
                </div>
                <?php
            }
            ?>
                </div>                    
            <?php
        }else{
            $secgru = new Consulta('SELECT * FROM tarifas WHERE id_fecha = 2 ORDER BY id ASC');
            ?>
               <!--<p>
                    Estas tarifas estarán vigentes sólo hasta el 
                    <span>
                    <?php
                        /*$fechy = new Consulta('SELECT * FROM rango_fechas WHERE id = 2');
                        while($rosy = $fechy->VerRegistro()){
                            echo fecha_long($rosy['fecha']);
                        }*/
                    ?>                           
                    </span>. 
                    Si desea ver los costos pasada esta fecha, dirígase a nuestra sección de <span><a href="tarifa.php" title="Tarifas">Tarifas</a></span>.
                </p>-->
                <div class="clear"></div>
                <div class="tar-pre">                
            <?php
            while($ros = $secgru->VerRegistro()){
                ?>
                <div class="presss">
                    <label>
                        <span><?php echo $ros['nombre']?>:</span> <?php if($ros['tipo_moneda']=="2"){echo "US$ ";}else{echo "S/. ";}?><?php echo $ros['monto']?>
                    </label>                      
                    <input type="radio" name="tarifa" id="<?php echo $ros['id']?>" value="<?php echo $ros['monto']?>" />
                </div>
                <?php
            }
            ?>
                </div>            
            <?php
        }
            
    
    }
    
    public function codTarifas() {
        $fechaActual = date('Y-m-d');
        $fech = new Consulta('SELECT * FROM rango_fechas ORDER BY id ASC');
         while($row = $fech->VerRegistro()){
             $this->_fechas[]=$row;
         }
    }
    
    public function listTarifasTar($fecha) {
        $query = new Consulta('SELECT * FROM tarifas WHERE id_fecha = "'.$fecha.'" ORDER BY id ASC');
        while($row = $query->VerRegistro()){
            ?>
                <?php if($row['tipo_moneda']=="2"){echo "US$ ";}else{echo "S/. ";}?> <?php echo $row['monto']?> <?php if($row['id']=="3" || $row['id']=="7" ){echo "(x3 personas)";}?><br />
            <?php
            
        }        
    }    
    
    public function listAdicionalesNacionales($idTar) {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 1');
        while($row = $query->VerRegistro()){
            ?>
            <div class="adiccion adicionalesfk<?php echo $row['id']?>fk<?php echo $idTar; ?>">
                <label><b><?php echo $row['nombre']?>:</b> S/. <?php echo $row['monto']?></label>
                <input type="checkbox" name="adic<?php echo $row['id']?>" id="adic<?php echo $row['id']?>" onClick="if (this.checked) sumarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>,<?php echo $row['id']?>); else restarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>,<?php echo $row['id']?>); if (this.checked) this.value=<?php echo $row['monto']?>; else this.value='<?php echo $row['monto']?>';"  value="<?php echo $row['monto']?>"/>
            </div>
            <?php
        }
    }
    
    public function listAdicionalesNacionales2($idTar) {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 1');
        $i = 4;
        while($row = $query->VerRegistro()){
            ?>
            <div class="adiccion adicionalesfk<?php echo $row['id']?>fk<?php echo $idTar; ?>">
                <label><b><?php echo $row['nombre']?>:</b> S/. <?php echo $row['monto']?></label>
                <input type="checkbox" name="adic<?php echo $row['id'].$i?>" id="adic<?php echo $row['id'].$i?>" onClick="if (this.checked) sumarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>); else restarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>); if (this.checked) this.value=<?php echo $row['monto']?>; else this.value='';"  value=""/>
            </div>
            <?php
        $i++;
        }
    }
    
    public function listAdicionalesNacionales3($idTar) {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 1');
        $i = 7;
        while($row = $query->VerRegistro()){
            ?>
            <div class="adiccion adicionalesfk<?php echo $row['id']?>fk<?php echo $idTar; ?>">
                <label><b><?php echo $row['nombre']?>:</b> S/. <?php echo $row['monto']?></label>
                <input type="checkbox" name="adic<?php echo $row['id'].$i?>" id="adic<?php echo $row['id'].$i?>" onClick="if (this.checked) sumarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>); else restarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>); if (this.checked) this.value=<?php echo $row['monto']?>; else this.value='';"  value=""/>
            </div>
            <?php
        $i++;
        }
    }   
    
    public function listAdicionalesExtranjeros($idTar) {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 2');
        while($row = $query->VerRegistro()){
            ?>
            <div class="adiccion adicionalesfk<?php echo $row['id']?>fk<?php echo $idTar; ?>">
                <label><b><?php echo $row['nombre']?>:</b> US$ <?php echo $row['monto']?></label>
                <input type="checkbox" name="adic<?php echo $row['id']?>" id="adic<?php echo $row['id']?>" onClick="if (this.checked) sumarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>); else restarCheck<?php echo $idTar; ?>(<?php echo $row['monto']?>);  if (this.checked) this.value=<?php echo $row['monto']?>; else this.value='';"  value="<?php echo $row['monto']?>"/>
            </div>
            <?php
        }
    }    
    
    public function listAdicionalesNacionalesTar() {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 1');
        while($row = $query->VerRegistro()){
        echo "S/. ".$row['monto']."<br/>";
        }
    }
    
    public function listAdicionalesExtranjerosTar() {
        $query = new Consulta('SELECT * FROM adicionales WHERE tipo_moneda = 2');
        while($row = $query->VerRegistro()){
        echo "US$ ".$row['monto']."<br/>";
        }
    }      
    
    public function printTarifas() {
        $query = new Consulta('SELECT * FROM rango_fechas ORDER BY id ASC');
        while($row = $query->VerRegistro()){
        ?>
            <div class="titulo_fecha" id="titf<?php echo $row['id']; ?>"><?php if($row['id'] == "1"){echo "Hasta el <div id='preve'>Pre-Venta</div>";}else{echo "Desde el ";} ?><?php echo fecha_dia_mes($row['fecha']);?></div>
            <div class="precios" id="pres<?php echo $row['id']; ?>">
                    <div class="personas">
                        Asociados:<br />
                        No Asociados:<br />
                        Tarifa Corporativa No Asociados:<br />
                       
                      
                       Extranjeros No Asociados x 01 día:<br />
                       Extranjeros No Asociados x 02 días:
                    </div>
                    <div class="precios_inscripcion">
                        <?php
                            $mont = new Inscritos();
                            $mont->listTarifasTar($row['id']);
                        ?>
                       
                    </div>
            </div>
            <br />       
        <?php
        }
    }

    public function insertAsociados($idhide1,$list) {
        $query = new Consulta("INSERT INTO ficha_inscripcion (id_tarifa, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, 
                               ciudad, total_tarifa, total_adicionales, total_a_pagar, estado, voucher) 
                               VALUES ('".$idhide1."','".$list[14]."','".$list[15]."','".$list[16]."','".$list[17]."','".$list[18]."','".$list[19]."',
                                       '".$list[20]."','".$list[21]."','".$list[22]."','".$list[23]."','".$list[24]."','".$list[25]."')");
        
        /*--Obtengo el ultimo id de Fichas para ingresar los items de esta ficha.---*/
        $rs = new Consulta("SELECT MAX(id) AS id FROM ficha_inscripcion");
        $row = $rs->VerRegistro();
        $id_ficha = $row[0];
        
        $query = new Consulta("
            INSERT INTO inscritos (id_ficha, nro_asociado, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular,
            asesor_inmobiliario, reg_ministerio_vivienda, nro_registro,
            almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2)
            VALUES (".$id_ficha.",'".$list[0]."','".$list[1]."','".$list[2]."','".$list[3]."','".$list[4]."','".$list[5]."','".$list[6]."','".$list[7]."','".$list[8]."',
                    '1','" . $list[9] . "','" . $list[10] . "',
                    '".$list[11]."','".$list[12]."','".$list[13]."')
            ");
    }
    
    public function insertNoAsociados($idhide2,$list) {
        $query = new Consulta("INSERT INTO ficha_inscripcion (id_tarifa, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, 
                                           total_tarifa, total_adicionales, total_a_pagar, estado, voucher) 
                               VALUES ('".$idhide2."','".$list[14]."','".$list[15]."','".$list[16]."','".$list[17]."','".$list[18]."','".$list[19]."','".$list[20]."',
                                       '".$list[21]."','".$list[22]."','".$list[23]."','".$list[24]."','".$list[25]."')");
        
        /*--Obtengo el ultimo id de Fichas para ingresar los items de esta ficha.---*/
        $rs = new Consulta("SELECT MAX(id) AS id FROM ficha_inscripcion");
        $row = $rs->VerRegistro();
        $id_ficha = $row[0];
        
        $query = new Consulta("
            INSERT INTO inscritos (id_ficha, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular, 
                        asesor_inmobiliario, reg_ministerio_vivienda, nro_registro,
                        almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2)
            VALUES('".$id_ficha."','".$list[0]."','".$list[1]."','".$list[2]."','".$list[3]."','".$list[4]."','".$list[5]."','".$list[6]."','".$list[7]."',
                       '".$list[8]."','".$list[9]."','".$list[10]."',
                       '".$list[11]."','".$list[12]."','".$list[13]."')
            ");
    }
    
    public function insertCorporativa($idhide3,$list) {
        $query = new Consulta("INSERT INTO ficha_inscripcion (id_tarifa, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, 
                                           total_tarifa, total_adicionales, total_a_pagar, estado, voucher) 
                               VALUES ('".$idhide3."','".$list[42]."','".$list[43]."','".$list[44]."','".$list[45]."','".$list[46]."','".$list[47]."','".$list[48]."',
                                       '".$list[49]."','".$list[50]."','".$list[51]."','".$list[52]."','".$list[53]."')");
        
        /*--Obtengo el ultimo id de Fichas para ingresar los items de esta ficha.---*/
        $rs = new Consulta("SELECT MAX(id) AS id FROM ficha_inscripcion");
        $row = $rs->VerRegistro();
        $id_ficha = $row[0];        
        
        $query = new Consulta("
            INSERT INTO inscritos (id_ficha, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular,
            asesor_inmobiliario, reg_ministerio_vivienda, nro_registro,
            almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2)
            VALUES('".$id_ficha."','".$list[0]."','".$list[1]."','".$list[2]."','".$list[3]."','".$list[4]."','".$list[5]."','".$list[6]."','".$list[7]."',
                   '".$list[8]."','".$list[9]."','".$list[10]."',
                   '".$list[11]."','".$list[12]."','".$list[13]."'),
                   ('".$id_ficha."','".$list[14]."','".$list[15]."','".$list[16]."','".$list[17]."','".$list[18]."','".$list[19]."','".$list[20]."','".$list[21]."',
                   '".$list[22]."','".$list[23]."','".$list[24]."',
                   '".$list[25]."','".$list[26]."','".$list[27]."'),
                   ('".$id_ficha."','".$list[28]."','".$list[29]."','".$list[30]."','".$list[31]."','".$list[32]."','".$list[33]."','".$list[34]."','".$list[35]."',
                   '".$list[36]."','".$list[37]."','".$list[38]."',
                   '".$list[39]."','".$list[40]."','".$list[41]."');            
            ");
    }
    
    public function insertExtranjeros($idhide4,$list) {
        $query = new Consulta("INSERT INTO ficha_inscripcion (id_tarifa, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, 
                                           total_tarifa, total_adicionales, total_a_pagar, estado, voucher) 
                               VALUES ('".$idhide4."','".$list[11]."','".$list[12]."','".$list[13]."','".$list[14]."','".$list[15]."','".$list[16]."','".$list[17]."',
                                       '".$list[18]."','".$list[19]."','".$list[20]."','".$list[21]."','".$list[22]."')");
        
        /*--Obtengo el ultimo id de Fichas para ingresar los items de esta ficha.---*/
        $rs = new Consulta("SELECT MAX(id) AS id FROM ficha_inscripcion");
        $row = $rs->VerRegistro();
        $id_ficha = $row[0];        
        
        $query = new Consulta("
            INSERT INTO inscritos (id_ficha, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular,
            almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2)
            VALUES('".$id_ficha."','".$list[0]."','".$list[1]."','".$list[2]."','".$list[3]."','".$list[4]."','".$list[5]."','".$list[6]."','".$list[7]."',
                   '".$list[8]."','".$list[9]."','".$list[10]."'
                )
            ");
    }    
        
}
?>
