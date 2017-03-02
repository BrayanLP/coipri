<?php

class Inscritos{

    private $_msgbox;

    public function __construct($msg='') {
        $this->_msgbox = $msg;
    }
    
    /*--------------Editar Fechas------------------------*/
    
    public function editFechas() {
        $query = new Consulta('SELECT * FROM rango_fechas WHERE id = '.$_GET['id']);
        Form::getForm($query, 'editFecha', 'inscritos.php');
    }
    public function updateFechas() {
        $query = new Consulta('
                UPDATE rango_fechas SET fecha = "' . $_POST['fecha'] . '"
                WHERE id = ' . $_GET['id'] . '
               ');            
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('inscritos.php');
    }

    /*--------------Rango de Fechas-----------------*/
    public function listRangoFechas() {
        $query = new Consulta('SELECT * FROM rango_fechas');
        while($row = $query->VerRegistro()){
            $this->listTarifas($row['id'],$row['fecha']);
        }
    }
    /*------------Adminstrador Tarifas------------------*/
    
    public function listTarifas($id,$fecha) {
        $sql = 'SELECT id, nombre ,tipo_moneda, monto FROM tarifas WHERE id_fecha = "'.$id.'" ORDER BY id ASC';
        $query = new Consulta($sql);
        ?>
        <h1><?php if($id == "1"){echo "Hasta el ";}else{echo "Desde el ";} ?> <?php echo fecha_dia_mes($fecha); ?>  <a class="tooltip" href="inscritos.php?action=editFecha&id=<?php echo $id; ?>" original-title="Editar"><img src="<?php echo _admin_ ?>edit.png"></a></h1>
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Tarifas</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){
                ?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id']; ?>">
                        <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['nombre'] ?></div>
                        <div class="options">
                            <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                            <a title="Editar" class="tooltip" href="inscritos.php?idTar=<?php echo $row['id'] ?>&action=editTar"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                            <a title="Ver Fichas" class="tooltip" href="inscritos.php?idTar=<?php echo $row['id'] ?>&action=listFich"><img src="<?php echo _admin_ ?>view.gif"></a>&nbsp;
                            <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('inscritos.php','<?php echo $row['id'] ?>','deleteTar')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                        </div>
                      </li>
                <?php
                 $y++;
                }
                ?>
             </ul>
        </div>
             <?php
    }

    /*public function newTarifas() {
        $query = new Consulta('SELECT * FROM tarifas');
        Form::getForm($query, 'newTar', 'inscritos.php');
    }*/

    /*public function addTarifas() {       
            $query = new Consulta('
                INSERT INTO tarifas ( nombre, monto )
            VALUES (
            "' . addslashes($_POST['titulo']) . '","' . addslashes($_POST['descripcion']) . '"
            )');                
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('Inscritos.php');      
    }*/

    public function editTarifas() {
        $query = new Consulta('SELECT id, nombre ,tipo_moneda, monto FROM tarifas WHERE id = "' . $_GET['idTar'] . '" ');
        Form::getForm($query, 'editTar', 'inscritos.php');
    }

    public function updateTarifas() {
        $query = new Consulta('
                UPDATE tarifas SET nombre = "' . $_POST['nombre'] . '",
                                   tipo_moneda = "' . $_POST['tipo_moneda'] . '",
                                   monto = "' . $_POST['monto'] . '"
                WHERE id = ' . $_GET['idTar'] . '
               ');            
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('inscritos.php');
    }

    public function deleteTarifas() {
        $query = new Consulta('DELETE FROM tarifas WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('inscritos.php');
    }    
    
    /*------------Adminstrador Fichas------------------*/
    
    public function listFichas() {
        $sql = 'SELECT *,f.id as id FROM ficha_inscripcion f, inscritos i WHERE f.id_tarifa = ' . $_GET['idTar'] . '
		and f.id=i.id_ficha
		
		
		 ORDER BY f.id ASC ';
        $query = new Consulta($sql);
        ?>	 
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Nº</th>
                        <th align="left">Nº Ficha</th>
                        <th align="left">Nombre</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
                <tbody id="listadoul">
                     <?php
                        $y = 1;
                        while($row = $query->VerRegistro()){
                        ?>                    
                    <tr class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>">
                        <td><div class="data"><?php echo $y ?></div></td>
                        <td><div class="data"><?php echo $row['id'] ?></div></td>
                        <td><div class="data"><?php echo $row['nombres'] ?></div></td>
                        <td>
                            <div class="options">
                               <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                                <a title="Exportar Excel" class="tooltip" href="export-excel.php?idFich=<?php echo $row['id']?>" ><img src="<?php echo _admin_ ?>export-excel.png"></a>&nbsp;
                                <a title="Editar" class="tooltip" href="inscritos.php?idFich=<?php echo $row['id'] ?>&idTar=<?php echo $_GET['idTar'];?>&action=editFich"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                                <a title="Ver Incritos" class="tooltip" href="inscritos.php?idTar=<?php echo $_GET['idTar']?>&idFich=<?php echo $row['id'] ?>&action=list"><img src="<?php echo _admin_ ?>view.gif"></a>&nbsp;
                                <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento('inscritos.php','<?php echo $row['id'] ?>','deleteFich')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                            </div>
                        </td>
                        <?php
                         $y++;
                        }
                        ?>                        
                    </tr>
                </tbody>
            </table>	
          </div>
             <?php
    }

    public function newFichas() {
        $query = new Consulta('SELECT id, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, total_tarifa, 
                                      total_adicionales, total_a_pagar, estado, voucher 
                               FROM ficha_inscripcion');
        Form::getForm($query, 'newFich', 'inscritos.php');
    }

    public function addFichas() {     
        $destino = '../aplication/webroot/imgs/vouchers/';
        define("NAMETHUMB", "/tmp/thumbtemp");         

        if (isset($_FILES['voucher']['name']) && $_FILES['voucher']['name'] != "") {
            $imagen = time() . $_FILES['voucher']['name']; // time()
            $size = $_FILES['voucher']['size'];
            $tarchivo = $_FILES['voucher']['type'];
            $temp = $_FILES['voucher']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
            //$thumbnail1->CreateThumbnail(200, 200, $imagen);

            $obj = new Upload();
            $obj->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);

        }else{
            $imagen = "no-voucher.jpg"; // time()
        }        

        $query = new Consulta('
            INSERT INTO ficha_inscripcion (
            id_tarifa, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, 
            total_tarifa, total_adicionales, total_a_pagar, estado, voucher)VALUES(
        "' . $_GET['idTar'] . '","' . $_POST['razon_social'] . '","' . $_POST['ruc'] . '","' . $_POST['correo_empresa'] . '","' . $_POST['telefono_empresa'] . '","' . $_POST['direccion'] . '",
        "' . $_POST['distrito'] . '","' . $_POST['ciudad'] . '",
        "' . $_POST['total_tarifa'] . '","' . $_POST['total_adicionales'] . '","' . $_POST['total_a_pagar'] . '","' . $_POST['estado'] . '",
        "' . $imagen . '"
        )');                
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('inscritos.php');
    }

    public function editFichas() {
        $query = new Consulta('SELECT id, razon_social, ruc, correo_empresa, telefono_empresa, direccion, distrito, ciudad, total_tarifa, 
                                      total_adicionales, total_a_pagar, estado, voucher 
                               FROM ficha_inscripcion WHERE id = "' . $_GET['idFich'] . '" ');
        Form::getForm($query, 'editFich', 'inscritos.php','','','vouchers','img','200','200');
    }

    public function updateFichas() {
        $destino = '../aplication/webroot/imgs/vouchers/';
        define("NAMETHUMB", "/tmp/thumbtemp");         

        if (isset($_FILES['voucher']['name']) && $_FILES['voucher']['name'] != "") {
            $imagen = time() . $_FILES['voucher']['name']; // time()
            $size = $_FILES['voucher']['size'];
            $tarchivo = $_FILES['voucher']['type'];
            $temp = $_FILES['voucher']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
            //$thumbnail1->CreateThumbnail(200, 200, $imagen);

            $obj = new Upload();
            $obj->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);
            
        $query = new Consulta('
                UPDATE ficha_inscripcion SET 
                razon_social = "' . $_POST['razon_social'] . '",
                ruc = "' . $_POST['ruc'] . '",
                correo_empresa = "' . $_POST['correo_empresa'] . '",
                telefono_empresa = "' . $_POST['telefono_empresa'] . '",
                direccion = "' . $_POST['direccion'] . '",
                distrito = "' . $_POST['distrito'] . '",
                ciudad = "' . $_POST['ciudad'] . '",
                total_tarifa = "' . $_POST['total_tarifa'] . '",
                total_adicionales = "' . $_POST['total_adicionales'] . '",
                total_a_pagar = "' . $_POST['total_a_pagar'] . '",
                estado = "' . $_POST['estado'] . '",
                voucher = "' . $imagen . '"                    
                WHERE id = ' . $_GET['idFich'] . '
               ');

        }else{
        $query = new Consulta('
                UPDATE ficha_inscripcion SET 
                razon_social = "' . $_POST['razon_social'] . '",
                ruc = "' . $_POST['ruc'] . '",
                correo_empresa = "' . $_POST['correo_empresa'] . '",
                telefono_empresa = "' . $_POST['telefono_empresa'] . '",                    
                direccion = "' . $_POST['direccion'] . '",
                distrito = "' . $_POST['distrito'] . '",
                ciudad = "' . $_POST['ciudad'] . '",
                total_tarifa = "' . $_POST['total_tarifa'] . '",
                total_adicionales = "' . $_POST['total_adicionales'] . '",
                total_a_pagar = "' . $_POST['total_a_pagar'] . '",
                estado = "' . $_POST['estado'] . '"                   
                WHERE id = ' . $_GET['idFich'] . '
               ');
        }        
                  
        $this->_msgbox->setMsgbox('Se actualiz&oacute; correctamente', 2);
        location('inscritos.php');
    }

    public function deleteFichas() {
        $query = new Consulta('DELETE FROM ficha_inscripcion WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('inscritos.php');
    }
    
/*------------Adminstrador Inscritos------------------*/
    
    public function listInscritos() {
        $sql = 'SELECT * FROM inscritos WHERE id_ficha = ' . $_GET['idFich'] . ' ORDER BY id ASC';
        $query = new Consulta($sql);
        ?>	 
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Nomres</th>
                        <th align="left">Apellidos</th>                        
                        <th align="left">Empresa</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
                <tbody  id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){
                ?>                    
                    <tr class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>">
                        <td><div class="data"> <?php echo $row['nombres'] ?></div></td>
                        <td><div class="data"> <?php echo $row['apellidos'] ?></div></td>                        
                        <td><div class="data"> <?php echo $row['empresa'] ?></div></td>
                        <td>
                            <div class="options">
                               <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                                <a title="Editar" class="tooltip" href="inscritos.php?id=<?php echo $row['id'] ?>&idFich=<?php echo $_GET['idFich'];?>&idTar=<?php echo $_GET['idTar'];?>&action=edit"><img src="<?php echo _admin_ ?>edit.png"/></a>&nbsp;
                                <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('inscritos.php','<?php echo $row['id'] ?>','delete')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                            </div>                            
                        </td>
                    </tr>
                <?php
                 $y++;
                }
                ?>                    
                </tbody>
            </table>	
         </div>
         <?php
    }

    public function newInscritos() {
        $query = new Consulta('SELECT id, nro_asociado, nombres	apellidos, empresa, ruc, cargo, 
                                      telefono, email, celular, asesor_inmobiliario, reg_ministerio_vivienda, 
                                      nro_registro, almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2, razon_social, 
                                      ruc_facturacion, direccion, ciudad, distrito 
                               FROM inscritos');
        Form::getForm($query, 'new', 'inscritos.php');
    }

    public function addInscritos() {       
            $query = new Consulta('
                INSERT INTO inscritos ( nro_asociado, nombres	apellidos, empresa, ruc, cargo, 
                                      telefono, email, celular, asesor_inmobiliario, reg_ministerio_vivienda, 
                                      nro_registro, almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2, razon_social, 
                                      ruc_facturacion, direccion, ciudad, distrito )
            VALUES (
            "' . $_POST['nro_asociado'] . '","' . $_POST['nombres'] . '","' . $_POST['apellidos'] . '","' . $_POST['empresa'] . '",
            "' . $_POST['ruc'] . '","' . $_POST['cargo'] . '","' . $_POST['telefono'] . '","' . $_POST['email'] . '",
            "' . $_POST['celular'] . '","' . $_POST['asesor_inmobiliario'] . '","' . $_POST['reg_ministerio_vivienda'] . '","' . $_POST['nro_registro'] . '",
            "' . $_POST['almuerzo_dia_1'] . '","' . $_POST['desayuno_dia_2'] . '","' . $_POST['razon_social'] . '","' . $_POST['ruc_facturacion'] . '","' . $_POST['direccion'] . '",
            "' . $_POST['ciudad'] . '","' . $_POST['distrito'] . '"
            )');                
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('inscritos.php');      
    }

    public function editInscritos() {
        $query = new Consulta('SELECT id, nro_asociado, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular, 
                               asesor_inmobiliario, reg_ministerio_vivienda, nro_registro, almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2
                               FROM inscritos WHERE id = "' . $_GET['id'] . '" ');
        Form::getForm($query, 'edit', 'inscritos.php');
    }

    public function updateInscritos() {
        $query = new Consulta('
                UPDATE inscritos SET 
                        nro_asociado = "' . $_POST['nro_asociado'] . '",
                        nombres = "' . $_POST['nombres'] . '",
                        apellidos = "' . $_POST['apellidos'] . '",
                        empresa = "' . $_POST['empresa'] . '",
                        ruc = "' . $_POST['ruc'] . '",
                        cargo = "' . $_POST['cargo'] . '",
                        telefono = "' . $_POST['telefono'] . '",
                        email = "' . $_POST['email'] . '",
                        celular = "' . $_POST['celular'] . '",
                        asesor_inmobiliario = "' . $_POST['asesor_inmobiliario'] . '",
                        reg_ministerio_vivienda = "' . $_POST['reg_ministerio_vivienda'] . '",
                        nro_registro = "' . $_POST['nro_registro'] . '",
                        almuerzo_dia_1 = "' . $_POST['almuerzo_dia_1'] . '",
                        desayuno_dia_2 = "' . $_POST['desayuno_dia2'] . '",
                        almuerzo_dia_2 = "' . $_POST['almuerzo_dia_2'] . '",
                        razon_social = "' . $_POST['razon_social'] . '",
                        ruc_facturacion = "' . $_POST['ruc_facturacion'] . '",
                        direccion = "' . $_POST['direccion'] . '",
                        ciudad = "' . $_POST['ciudad'] . '",
                        distrito = "' . $_POST['distrito'] . '",
                WHERE id = ' . $_GET['id'] . '
               ');            
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('inscritos.php?idFich=1&action=list');
    }

    public function deleteInscritos() {
        $query = new Consulta('DELETE FROM inscritos WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('inscritos.php');
    }    
    
    /*--------------Adicionales------------------*/
    
    public function listAdicionales() {
        $sql = 'SELECT * FROM adicionales WHERE tipo_moneda=1 ORDER BY id ASC';
        $query = new Consulta($sql);
        ?>	
        <h3>Soles (S/.)</h3>
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Nombre</th>
                        <th align="left">Monto</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){
                ?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id']; ?>">
                        <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['titulo'] ?></div>
                        <div class="data"> <?php echo $row['nombre'] ?></div>&nbsp;&nbsp;&nbsp;
                        <div class="data"> <?php echo $row['monto'] ?></div>
                        <div class="options">
                           <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                            <a title="Editar" class="tooltip" href="inscritos.php?idAdic=<?php echo $row['id'] ?>&action=editAdic"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                            <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('inscritos.php','<?php echo $row['id'] ?>','deleteAdic')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                        </div>
                      </li>
                <?php
                 $y++;
                }
                ?>
             </ul> 
         </div>
         <?php
         /*----------------------------------*/
        $sql = 'SELECT * FROM adicionales WHERE tipo_moneda = 2 ORDER BY id ASC';
        $query = new Consulta($sql);
        ?>	
        <h3>Dolares (US$)</h3>
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Nombre</th>
                        <th align="left">Monto</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){
                ?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id']; ?>">
                        <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['titulo'] ?></div>
                        <div class="data"> <?php echo $row['nombre'] ?></div>&nbsp;&nbsp;&nbsp;
                        <div class="data"> <?php echo $row['monto'] ?></div>
                        <div class="options">
                           <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                            <a title="Editar" class="tooltip" href="inscritos.php?idAdic=<?php echo $row['id'] ?>&action=editAdic"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                            <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('inscritos.php','<?php echo $row['id'] ?>','deleteAdic')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                        </div>
                      </li>
                <?php
                 $y++;
                }
                ?>
             </ul> 
         </div>
         <?php         
    }

    /*public function newAdicionales() {
        $query = new Consulta('SELECT * FROM adicionales');
        Form::getForm($query, 'newAdic', 'inscritos.php');
    }

    public function addAdicionales() {       
            $query = new Consulta('
                INSERT INTO adicionales ( titulo, descripcion )
            VALUES (
            "' . $_POST['titulo'] . '","' . $_POST['descripcion']. '"
            )');                
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('Inscritos.php');      
    }*/

    public function editAdicionales() {
        $query = new Consulta('SELECT id, nombre, tipo_moneda, monto FROM adicionales WHERE id = ' . $_GET['idAdic']);
        Form::getForm($query, 'editAdic', 'inscritos.php');
    }

    public function updateAdicionales() {
        $query = new Consulta('
                UPDATE adicionales SET nombre = "' . $_POST['nombre'] . '",
                                       tipo_moneda = "' . $_POST['tipo_moneda'] . '",
                                       monto = "' . $_POST['monto'] . '"
                WHERE id = ' . $_GET['idAdic'] . '
               ');            
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('Inscritos.php');
    }

    public function deleteAdicionales() {
        $query = new Consulta('DELETE FROM adicionales WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('Inscritos.php');
    }  

}