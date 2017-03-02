<?php
    include("inc.aplication_top.php");
    
    $idFicha = $_GET['idFich'];
    $query = new Consulta(" SELECT razon_social, ruc, direccion, distrito, ciudad, total_tarifa, 
                                   total_adicionales, total_a_pagar, estado, voucher
                            FROM ficha_inscripcion WHERE id = " . $idFicha ." ");
    $query2 = new Consulta(" SELECT nro_asociado, nombres, apellidos, empresa, ruc, cargo, telefono, email, celular, asesor_inmobiliario, 
                                    reg_ministerio_vivienda, nro_registro, almuerzo_dia_1, desayuno_dia_2, almuerzo_dia_2
                            FROM inscritos WHERE id_ficha = " . $idFicha ." ");    

    header("Content-type: application/x-msdownload");
    header("MIME-Version: 1.0\n");
    header("Content-type: text/html; charset=utf-8\n");
    header("Content-Disposition: attachment; filename=Ficha-Coipri.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    ?>
    <table>
        <thead>
            <tr>
                <th>N&ordm; Ficha</th>
                <th>N&ordm; Asociado</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Empresa</th>
                <th>RUC</th>
                <th>Cargo</th>
                <th>Tel&eacute;fono</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Asesor Inmobiliario</th>
                <th>Registro Ministerio de Vivienda</th>
                <th>N&ordm; Registro</th>
                <th>Almuerzo D&iacute;a 1</th>
                <th>Desayuno D&iacute;a 2</th>
                <th>Almuerzo D&iacute;a 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>    
        <?php
        while($data = $query2->VerRegistro()) { 
        ?>
                <td><?php echo $data['id_ficha']?></td>
                <td><?php echo $data['nro_asociado']?></td>
                <td><?php echo $data['nombres']?></td>   
                <td><?php echo $data['apellidos']?></td>  
                <td><?php echo $data['empresa']?></td>
                <td><?php echo $data['ruc']?></td>
                <td><?php echo $data['cargo']?></td>
                <td><?php echo $data['telefono']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['celular']?></td>
                <td><?php if($data['asesor_inmobiliario'] != "0"){ echo "S&iacute;";}else{echo "No";}?></td>
                <td><?php if($data['reg_ministerio_vivienda'] != "0"){echo "S&iacute;";}else{echo "No";} ?></td>
                <td><?php echo $data['nro_registro']?></td>
                <td><?php echo $data['almuerzo_dia_1']?></td>
                <td><?php echo $data['desayuno_dia_2']?></td>
                <td><?php echo $data['almuerzo_dia_2']?></td>
        <?php
        }
        ?>
            </tr>
        </tbody>
    </table>
        <?php
            $data2 = $query->VerRegistro();
            //total_tarifa	total_adicionales	total_a_pagar	estado	voucher
        ?>
    <table>
        <tbody>
            <td>&nbsp;</td>
        </tbody>
    </table>
    <table>
        <tbody>
            <td>&nbsp;</td>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>Raz&oacute;n Social</th>
                <th>RUC</th>
                <th>Direcci&oacute;n</th>
                <th>Distrito</th>
                <th>Ciudad</th>
                <th>Total Tarifas</th>
                <th>Total Adiconales</th>
                <th>Total a pagar</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $data2['razon_social']?></td>
                <td><?php echo $data2['ruc']?></td>
                <td><?php echo $data2['direccion']?></td>
                <td><?php echo $data2['distrito']?></td>
                <td><?php echo $data2['ciudad']?></td>
                <td><?php echo $data2['total_tarifa']?></td>
                <td><?php echo $data2['total_adicionales']?></td>
                <td><?php echo $data2['total_a_pagar']?></td>
                <td><?php if($data2['estado'] == "1"){echo "Cancelado;";}else{echo "Pendiente";} ?></td>
            </tr>
        </tbody>
    </table>
    <?php

?>