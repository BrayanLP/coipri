<?php

include("inc.aplication_top.php");

$destino = 'aplication/webroot/imgs/vouchers/';
define("NAMETHUMB", "/tmp/thumbtemp");    

if(!empty($_POST['idhide1'])){
    $idhide1 = $_POST['idhide1'];
    
    if(!empty($_POST['deposito1'])){
        $deposito = "1";
        $depocliente = "Sí";
    }else{
        $deposito = "2";
        $depocliente = "No; Puede realizar deposito y enviar el voucher scaneado a este mismo correo.";
    }
    
    if($_POST['registrado1'] == "si"){
        $registrado1 = "1";
    }else{
        $registrado1 = "2";
    }    
    
    if (isset($_FILES['boucher1']['name']) && $_FILES['boucher1']['name'] != "") {
        $imagen = time() . $_FILES['boucher1']['name']; // time()
        $size = $_FILES['boucher1']['size'];
        $tarchivo = $_FILES['boucher1']['type'];
        $temp = $_FILES['boucher1']['tmp_name'];
        //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
        //$thumbnail1->CreateThumbnail(200, 200, $imagen);

        $obj1 = new Upload();
        $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);

    }else{
        $imagen = "no-voucher.jpg"; // time()
    }
    
    $list = array($_POST['numasociado1'],$_POST['nombres1'],$_POST['apellidos1'],$_POST['empresa1'],
        $_POST['ruc1'],$_POST['cargo1'],$_POST['telefono1'],$_POST['email1'],$_POST['celular1'],$registrado1,$_POST['nroregistro1'],
        $_POST['adic1'],$_POST['adic2'],$_POST['adic3'],
        $_POST['razonsocial1'],$_POST['rucdatos1'],$_POST['correoempre1'],$_POST['telefonoempre1'],$_POST['direccion1'],$_POST['distrito1'],$_POST['ciudad1'],
        $_POST['tarifas1'],$_POST['adicionales1'],$_POST['totalpagar1'],$deposito,$imagen);
    
    $insert = new Inscritos();
    $insert->insertAsociados($idhide1,$list);
    
    /*Mensaje Administrador*/
    $to = "coipri2012@coipri.pe";//almazuru@hotmail.com
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: " . $_POST['nombres1'] . " <" . $_POST['email1'] . ">\n";
    //$headers .= 'Cc: emanchego@develoweb.net' . "\r\n";
    $headers .= 'Bcc: mvargas@vargasyzuniga.com,azuniga@vargasyzuniga.com' . "\r\n";    

    $mens = "
            Se envio una consulta desde su website COIPRI :<br/> <br/>

            Nº Asociado = " . $_POST['numasociado1'] . "<br/>
            Nombres = " . $_POST['nombres1'] . "<br/>
            Apellidos = " . $_POST['apellidos1'] . "<br/>
            Empresa = " . $_POST['empresa1'] . "<br/>
            Ruc = " . $_POST['ruc1'] . "<br/>
            Cargo = " . $_POST['cargo1'] . "<br/>
            Email = " . $_POST['email1'] . "<br/>
            Teléfono = " . $_POST['telefono1'] . "<br/>
            Celular = " . $_POST['celular1'] . "<br/><br/>
                
            Registrado en Ministerio de Vivienda = " . $_POST['registrado1'] . "<br/>
            Nº Registro = " . $_POST['nroregistro1'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial1'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos1'] . "<br/>
            Correo Empresa = " . $_POST['correoempre1'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre1'] . "<br/>
            Dirección = " . $_POST['direccion1'] . "<br/>
            Distrito = " . $_POST['distrito1'] . "<br/>
            Ciudad = " . $_POST['ciudad1'] . "<br/>
                
            Total Tarifas = S/." . $_POST['tarifas1'] . "<br/>
            Total Adiconales = S/." . $_POST['adicionales1'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar1'] . " <br/>
            Realizó deposito = " . $depocliente . " <br/>

       ";

    @mail($to, $subject, $mens, $headers);    
    
    /*Mensaje Cliente*/
    $to = $_POST['email1'];//almazuru@hotmail.com
    $subject = "Incripción - Evento - .:: COIPRI 2012 ::.";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: COIPRI <coipri2012@coipri.pe>\n";

    $mens = "
            YA ESTÁ INSCRITO EN EL EVENTO MAS IMPORTANTE DE LA INDUSTRIA INMOBILIARIA EN EL PERÚ, LO ESPERAMOS - COIPRI :<br/> <br/>

            DATOS DE CONFIRMACIÓN:<br/><br/>

            Nº Asociado = " . $_POST['numasociado1'] . "<br/>
            Nombres = " . $_POST['nombres1'] . "<br/>
            Apellidos = " . $_POST['apellidos1'] . "<br/>
            Empresa = " . $_POST['empresa1'] . "<br/>
            Ruc = " . $_POST['ruc1'] . "<br/>
            Cargo = " . $_POST['cargo1'] . "<br/>
            Email = " . $_POST['email1'] . "<br/>
            Teléfono = " . $_POST['telefono1'] . "<br/>
            Celular = " . $_POST['celular1'] . "<br/><br/>
                
            Registrado en Ministerio de Vivienda = " . $_POST['registrado1'] . "<br/>
            Nº Registro = " . $_POST['nroregistro1'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial1'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos1'] . "<br/>
            Correo Empresa = " . $_POST['correoempre1'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre1'] . "<br/>                
            Dirección = " . $_POST['direccion1'] . "<br/>
            Distrito = " . $_POST['distrito1'] . "<br/>
            Ciudad = " . $_POST['ciudad1'] . "<br/>
                
            Total Tarifas = S/." . $_POST['tarifas1'] . "<br/>
            Total Adiconales = S/." . $_POST['adicionales1'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar1'] . " <br/>
            Realizó deposito = " . $depocliente . " <br/>

       ";

    @mail($to, $subject, $mens, $headers);       
    
    
}elseif(!empty($_POST['idhide2'])){
    $idhide2 = $_POST['idhide2'];
    
    if(!empty($_POST['deposito2'])){
        $deposito = "1";
        $depocliente = "Sí";
    }else{
        $deposito = "2";
        $depocliente = "No; Puede realizar deposito y enviar el voucher scaneado a este mismo correo.";
    }
    
    if (isset($_FILES['boucher2']['name']) && $_FILES['boucher2']['name'] != "") {
        $imagen = time() . $_FILES['boucher2']['name']; // time()
        $size = $_FILES['boucher2']['size'];
        $tarchivo = $_FILES['boucher2']['type'];
        $temp = $_FILES['boucher2']['tmp_name'];
        //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
        //$thumbnail1->CreateThumbnail(200, 200, $imagen);

        $obj1 = new Upload();
        $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);

    }else{
        $imagen = "no-vocher.jpg";
    }
    
    if($_POST['asesor2'] == "si"){
        $asesor2 = "1";
    }else{
        $asesor2 = "2";
    }
    
    if($_POST['registrado2'] == "si"){
        $registrado2 = "1";
    }else{
        $registrado2 = "2";
    }
    
    $list = array($_POST['nombres2'],$_POST['apellidos2'],$_POST['empresa2'],$_POST['ruc2'],$_POST['cargo2'],$_POST['telefono2'],$_POST['email2'],$_POST['celular2'],
                  $asesor2,$registrado2,$_POST['nroregistro2'],
                  $_POST['adic1'],$_POST['adic2'],$_POST['adic3'],
                  $_POST['razonsocial2'],$_POST['rucdatos2'],$_POST['correoempre2'],$_POST['telefonoempre2'],$_POST['direccion2'],$_POST['distrito2'],$_POST['ciudad2'],
                  $_POST['tarifas2'],$_POST['adicionales2'],$_POST['totalpagar2'],
                  $deposito,$imagen);
    $insert = new Inscritos();
    $insert->insertNoAsociados($idhide2,$list);    
    
    /*Administrador*/
    $to = "coipri2012@coipri.pe";
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: " . $_POST['nombres2'] . " <" . $_POST['email2'] . ">\n";
    //$headers .= 'Cc: emanchego@develoweb.net' . "\r\n";
    $headers .= 'Bcc: mvargas@vargasyzuniga.com,azuniga@vargasyzuniga.com' . "\r\n";       
    
    $mens = "
            Se envio una consulta desde su website COIPRI :<br/> <br/>

            Nombres = " . $_POST['nombres2'] . "<br/>
            Apellidos = " . $_POST['apellidos2'] . "<br/>
            Empresa = " . $_POST['empresa2'] . "<br/>
            Ruc = " . $_POST['ruc2'] . "<br/>
            Cargo = " . $_POST['cargo2'] . "<br/>
            Empresa = " . $_POST['empresa2'] . "<br/>
            Email = " . $_POST['email2'] . "<br/>
            Teléfono = " . $_POST['telefono2'] . "<br/>
            Celular = " . $_POST['celular2'] . "<br/><br/>
                
            Asesor Inmobiliario = " . $_POST['asesor2'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado2'] . "<br/>
            Nº Registro = " . $_POST['nroregistro2'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial2'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos2'] . "<br/>
            Correo Empresa = " . $_POST['correoempre2'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre2'] . "<br/>                
            Dirección = " . $_POST['direccion2'] . "<br/>
            Distrito = " . $_POST['distrito2'] . "<br/>
            Ciudad = " . $_POST['ciudad2'] . "<br/>
                
            Tarifas = S/." . $_POST['tarifas2'] . "<br/>
            Adicionales = S/." . $_POST['adicionales2'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar2'] . "<br/>
            Realizó deposito = " . $depocliente . "<br/>

       ";

    @mail($to, $subject, $mens, $headers);  
    
    /*Cliente*/
    $to = $_POST['email2'];
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: COIPRI <coipri2012@coipri.pe>\n";
    
    $mens = "
            YA ESTÁ INSCRITO EN EL EVENTO MAS IMPORTANTE DE LA INDUSTRIA INMOBILIARIA EN EL PERÚ, LO ESPERAMOS - COIPRI :<br/> <br/>

            DATOS DE CONFIRMACIÓN:<br/><br/>

            Nombres = " . $_POST['nombres2'] . "<br/>
            Apellidos = " . $_POST['apellidos2'] . "<br/>
            Empresa = " . $_POST['empresa2'] . "<br/>
            Ruc = " . $_POST['ruc2'] . "<br/>
            Cargo = " . $_POST['cargo2'] . "<br/>
            Empresa = " . $_POST['empresa2'] . "<br/>
            Email = " . $_POST['email2'] . "<br/>
            Teléfono = " . $_POST['telefono2'] . "<br/>
            Celular = " . $_POST['celular2'] . "<br/><br/>
                
            Asesor Inmobiliario = " . $_POST['asesor2'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado2'] . "<br/>
            Nº Registro = " . $_POST['nroregistro2'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial2'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos2'] . "<br/>
            Correo Empresa = " . $_POST['correoempre2'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre2'] . "<br/>                
            Dirección = " . $_POST['direccion2'] . "<br/>
            Distrito = " . $_POST['distrito2'] . "<br/>
            Ciudad = " . $_POST['ciudad2'] . "<br/>
                
            Tarifas = S/." . $_POST['tarifas2'] . "<br/>
            Adicionales = S/." . $_POST['adicionales2'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar2'] . "<br/>
            Realizó deposito = " . $depocliente . "<br/>

       ";

    @mail($to, $subject, $mens, $headers);      
    
    
}elseif(!empty($_POST['idhide3'])){
    $idhide3 = $_POST['idhide3'];
    
    if(!empty($_POST['deposito3'])){
        $deposito = "1";
        $depocliente = "Sí";
    }else{
        $deposito = "2";
        $depocliente = "No; Puede realizar deposito y enviar el voucher scaneado a este mismo correo.";
    }
    
    if (isset($_FILES['boucher3']['name']) && $_FILES['boucher3']['name'] != "") {
        $imagen = time() . $_FILES['boucher3']['name']; // time()
        $size = $_FILES['boucher3']['size'];
        $tarchivo = $_FILES['boucher3']['type'];
        $temp = $_FILES['boucher3']['tmp_name'];
        //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
        //$thumbnail1->CreateThumbnail(200, 200, $imagen);

        $obj1 = new Upload();
        $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);

    }else{
        $imagen = "no-vocher.jpg";
    }     
    
    if($_POST['asesor3'] == "si"){$asesor3 = "1";}else{$asesor3 = "2";}
    if($_POST['registrado3'] == ""){$registrado3 = "1";}else{$registrado3 = "2";}    
    if($_POST['asesor23'] == "si"){$asesor23 = "1";}else{$asesor23 = "2";}
    if($_POST['registrado23'] == ""){$registrado23 = "1";}else{$registrado23 = "2";}    
    if($_POST['asesor33'] == "si"){$asesor33 = "1";}else{$asesor33 = "2";}
    if($_POST['registrado33'] == ""){$registrado33 = "1";}else{$registrado33 = "2";}     
    
    $list = array($_POST['nombres3'],$_POST['apellidos3'],$_POST['empresa3'],$_POST['ruc3'],$_POST['cargo3'],$_POST['telefono3'],$_POST['email3'],$_POST['celular3'],
        $asesor3,$registrado3,$_POST['nroregistro3'],
        $_POST['adic1'],$_POST['adic2'],$_POST['adic3'],
        $_POST['nombres23'],$_POST['apellidos23'],$_POST['empresa23'],$_POST['ruc23'],$_POST['cargo23'],$_POST['telefono23'],$_POST['email23'],$_POST['celular23'],
        $asesor23,$registrado23,$_POST['nroregistro23'],
        $_POST['adic1'],$_POST['adic2'],$_POST['adic3'],
        $_POST['nombres33'],$_POST['apellidos33'],$_POST['empresa33'],$_POST['ruc33'],$_POST['cargo33'],$_POST['telefono33'],$_POST['email33'],$_POST['celular33'],
        $asesor33,$registrado33,$_POST['nroregistro33'],
        $_POST['adic1'],$_POST['adic2'],$_POST['adic3'],
        $_POST['razonsocial3'],$_POST['rucdatos3'],$_POST['correoempre3'],$_POST['telefonoempre3'],$_POST['direccion3'],$_POST['distrito3'],$_POST['ciudad3'],
        $_POST['tarifas3'],$_POST['adicionales3'],$_POST['totalpagar3'],
        $deposito,$imagen);
    
    $insert = new Inscritos();
    $insert->insertCorporativa($idhide3,$list);     
    
    /*Administrador*/
    $to = "coipri2012@coipri.pe";
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: " . $_POST['nombres3'] . " <" . $_POST['email3'] . ">\n";
    //$headers .= 'Cc: emanchego@develoweb.net' . "\r\n";
    $headers .= 'Bcc: mvargas@vargasyzuniga.com,azuniga@vargasyzuniga.com' . "\r\n";       
    
    $mens = "
            Se envio una consulta desde su website COIPRI :<br/> <br/>

            Nombres = " . $_POST['nombres3'] . "<br/>
            Apellidos = " . $_POST['apellidos3'] . "<br/>
            Empresa = " . $_POST['empresa3'] . "<br/>
            Ruc = " . $_POST['ruc3'] . "<br/>
            Cargo = " . $_POST['cargo3'] . "<br/>
            Empresa = " . $_POST['empresa3'] . "<br/>
            Email = " . $_POST['email3'] . "<br/>
            Teléfono = " . $_POST['telefono3'] . "<br/>
            Celular = " . $_POST['celular3'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor3'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado3'] . "<br/>
            Nº Registro = " . $_POST['nroregistro3'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>
                
            Nombres = " . $_POST['nombres23'] . "<br/>
            Apellidos = " . $_POST['apellidos23'] . "<br/>
            Empresa = " . $_POST['empresa23'] . "<br/>
            Ruc = " . $_POST['ruc23'] . "<br/>
            Cargo = " . $_POST['cargo23'] . "<br/>
            Empresa = " . $_POST['empresa23'] . "<br/>
            Email = " . $_POST['email23'] . "<br/>
            Teléfono = " . $_POST['telefono23'] . "<br/>
            Celular = " . $_POST['celular23'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor23'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado23'] . "<br/>
            Nº Registro = " . $_POST['nroregistro23'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>
                
            Nombres = " . $_POST['nombres33'] . "<br/>
            Apellidos = " . $_POST['apellidos33'] . "<br/>
            Empresa = " . $_POST['empresa33'] . "<br/>
            Ruc = " . $_POST['ruc33'] . "<br/>
            Cargo = " . $_POST['cargo33'] . "<br/>
            Empresa = " . $_POST['empresa33'] . "<br/>
            Email = " . $_POST['email33'] . "<br/>
            Teléfono = " . $_POST['telefono33'] . "<br/>
            Celular = " . $_POST['celular33'] . "<br/><br/>
                
            Asesor Inmobiliario = " . $_POST['asesor33'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado33'] . "<br/>
            Nº Registro = " . $_POST['nroregistro33'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial3'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos3'] . "<br/>
            Correo Empresa = " . $_POST['correoempre3'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre3'] . "<br/>                
            Dirección = " . $_POST['direccion3'] . "<br/>
            Distrito = " . $_POST['distrito3'] . "<br/>
            Ciudad = " . $_POST['ciudad3'] . "<br/>
                
            Tarifas = S/." . $_POST['tarifas3'] . "<br/>
            Total Adicionales = S/." . $_POST['adicionales3'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar3'] . "<br/>
            Realizó deposito = " . $$depocliente . "<br/>

       ";

    @mail($to, $subject, $mens, $headers);
    
    /*Cliente*/
    $to = $_POST['correoempre3'];
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: COIPRI <coipri2012@coipri.pe>\n";
    
    $mens = "
            YA ESTÁ INSCRITO EN EL EVENTO MAS IMPORTANTE DE LA INDUSTRIA INMOBILIARIA EN EL PERÚ, LO ESPERAMOS - COIPRI :<br/> <br/>

            DATOS DE CONFIRMACIÓN:<br/><br/>

            Nombres = " . $_POST['nombres3'] . "<br/>
            Apellidos = " . $_POST['apellidos3'] . "<br/>
            Empresa = " . $_POST['empresa3'] . "<br/>
            Ruc = " . $_POST['ruc3'] . "<br/>
            Cargo = " . $_POST['cargo3'] . "<br/>
            Empresa = " . $_POST['empresa3'] . "<br/>
            Email = " . $_POST['email3'] . "<br/>
            Teléfono = " . $_POST['telefono3'] . "<br/>
            Celular = " . $_POST['celular3'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor3'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado3'] . "<br/>
            Nº Registro = " . $_POST['nroregistro3'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>
                
            Nombres = " . $_POST['nombres23'] . "<br/>
            Apellidos = " . $_POST['apellidos23'] . "<br/>
            Empresa = " . $_POST['empresa23'] . "<br/>
            Ruc = " . $_POST['ruc23'] . "<br/>
            Cargo = " . $_POST['cargo23'] . "<br/>
            Empresa = " . $_POST['empresa23'] . "<br/>
            Email = " . $_POST['email23'] . "<br/>
            Teléfono = " . $_POST['telefono23'] . "<br/>
            Celular = " . $_POST['celular23'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor23'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado23'] . "<br/>
            Nº Registro = " . $_POST['nroregistro23'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>
                
            Nombres = " . $_POST['nombres33'] . "<br/>
            Apellidos = " . $_POST['apellidos33'] . "<br/>
            Empresa = " . $_POST['empresa33'] . "<br/>
            Ruc = " . $_POST['ruc33'] . "<br/>
            Cargo = " . $_POST['cargo33'] . "<br/>
            Empresa = " . $_POST['empresa33'] . "<br/>
            Email = " . $_POST['email33'] . "<br/>
            Teléfono = " . $_POST['telefono33'] . "<br/>
            Celular = " . $_POST['celular33'] . "<br/><br/>
                
            Asesor Inmobiliario = " . $_POST['asesor33'] . "<br/>
            Registrado en Ministerio de Vivienda = " . $_POST['registrado33'] . "<br/>
            Nº Registro = " . $_POST['nroregistro33'] . "<br/><br/>

            Almuerzo Día 1 = S/." . $_POST['adic1'] . "<br/>
            Desaryuno Día 2 = S/." . $_POST['adic2'] . "<br/>
            Almuerzo Día 2 = S/." . $_POST['adic3'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial3'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos3'] . "<br/>
            Correo Empresa = " . $_POST['correoempre3'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre3'] . "<br/>                
            Dirección = " . $_POST['direccion3'] . "<br/>
            Distrito = " . $_POST['distrito3'] . "<br/>
            Ciudad = " . $_POST['ciudad3'] . "<br/>
                
            Tarifas = S/." . $_POST['tarifas3'] . "<br/>
            Total Adicionales = S/." . $_POST['adicionales3'] . "<br/>
            Total a Pagar = S/." . $_POST['totalpagar3'] . "<br/>
            Realizó deposito = " . $depocliente . "<br/>

       ";

    @mail($to, $subject, $mens, $headers);    
    
}elseif(!empty($_POST['idhide4'])){
    $idhide4 = $_POST['idhide4'];
    
    if(!empty($_POST['deposito4'])){
        $deposito = "1";
        $depocliente = "Sí";
    }else{
        $deposito = "2";
        $depocliente = "No; Puede realizar deposito y enviar el voucher scaneado a este mismo correo.";
    }
    
    if (isset($_FILES['boucher4']['name']) && $_FILES['boucher4']['name'] != "") {
        $imagen = time() . $_FILES['boucher4']['name']; // time()
        $size = $_FILES['boucher4']['size'];
        $tarchivo = $_FILES['boucher4']['type'];
        $temp = $_FILES['boucher4']['tmp_name'];
        //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['boucher1']['name']);
        //$thumbnail1->CreateThumbnail(200, 200, $imagen);

        $obj1 = new Upload();
        $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);

    }else{
        $imagen = "no-vocher.jpg";
    }        
    
    $list = array($_POST['nombres4'],$_POST['apellidos4'],$_POST['empresa4'],$_POST['ruc4'],$_POST['cargo4'],$_POST['telefono4'],$_POST['email4'],$_POST['celular4'],
                  $_POST['adic4'],$_POST['adic5'],$_POST['adic6'],
                  $_POST['razonsocial4'],$_POST['rucdatos4'],$_POST['correoempre4'],$_POST['telefonoempre4'],$_POST['direccion4'],$_POST['distrito4'],$_POST['ciudad4'],
                  $_POST['tarifas4'],$_POST['adicionales4'],$_POST['totalpagar4'],
                  $deposito,$imagen);
    $insert = new Inscritos();
    $insert->insertExtranjeros($idhide4,$list);    
    
    /*Administrador*/
    $to = "coipri2012@coipri.pe";
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: " . $_POST['nombres4'] . " <" . $_POST['email4'] . ">\n";
    //$headers .= 'Cc: emanchego@develoweb.net' . "\r\n";
    $headers .= 'Bcc: mvargas@vargasyzuniga.com,azuniga@vargasyzuniga.com' . "\r\n";    
    
    $mens = "
            Se envio una consulta desde su website COIPRI :<br/> <br/>

            Nombres = " . $_POST['nombres4'] . "<br/>
            Apellidos = " . $_POST['apellidos4'] . "<br/>
            Empresa = " . $_POST['empresa4'] . "<br/>
            Ruc = " . $_POST['ruc4'] . "<br/>
            Cargo = " . $_POST['cargo4'] . "<br/>
            Empresa = " . $_POST['empresa4'] . "<br/>
            Email = " . $_POST['email4'] . "<br/>
            Teléfono = " . $_POST['telefono4'] . "<br/>
            Celular = " . $_POST['celular4'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor4'] . "<br/><br/>

            Almuerzo Día 1 = US$" . $_POST['adic4'] . "<br/>
            Desaryuno Día 2 = US$" . $_POST['adic5'] . "<br/>
            Almuerzo Día 2 = US$" . $_POST['adic6'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial4'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos4'] . "<br/>
            Correo Empresa = " . $_POST['correoempre4'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre4'] . "<br/>                
            Dirección = " . $_POST['direccion4'] . "<br/>
            Distrito = " . $_POST['distrito4'] . "<br/>
            Ciudad = " . $_POST['ciudad4'] . "<br/>
                
            Tarifas = US$" . $_POST['tarifas4'] . "<br/>
            Adicionales = US$" . $_POST['adicionales4'] . "<br/>
            Total a Pagar = US$" . $_POST['totalpagar4'] . "<br/>
            Realizó deposito = " . $depocliente . "<br/>
            
       ";

    @mail($to, $subject, $mens, $headers);
    
    /*Cliente*/
    $to = $_POST['email4'];
    $subject = "Incritos - Via Formulario - COIPRI";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: COIPRI <coipri2012@coipri.pe>\n";
    
    $mens = "
            Se envio una consulta desde su website COIPRI :<br/> <br/>

            Nombres = " . $_POST['nombres4'] . "<br/>
            Apellidos = " . $_POST['apellidos4'] . "<br/>
            Empresa = " . $_POST['empresa4'] . "<br/>
            Ruc = " . $_POST['ruc4'] . "<br/>
            Cargo = " . $_POST['cargo4'] . "<br/>
            Empresa = " . $_POST['empresa4'] . "<br/>
            Email = " . $_POST['email4'] . "<br/>
            Teléfono = " . $_POST['telefono4'] . "<br/>
            Celular = " . $_POST['celular4'] . "<br/><br/>

            Asesor Inmobiliario = " . $_POST['asesor4'] . "<br/><br/>

            Almuerzo Día 1 = US$" . $_POST['adic4'] . "<br/>
            Desaryuno Día 2 = US$" . $_POST['adic5'] . "<br/>
            Almuerzo Día 2 = US$" . $_POST['adic6'] . "<br/><br/>

            Razon Social = " . $_POST['razonsocial4'] . "<br/>
            Ruc Facturación = " . $_POST['rucdatos4'] . "<br/>
            Correo Empresa = " . $_POST['correoempre4'] . "<br/>
            Teléfono Empresa = " . $_POST['telefonoempre4'] . "<br/>                
            Dirección = " . $_POST['direccion4'] . "<br/>
            Distrito = " . $_POST['distrito4'] . "<br/>
            Ciudad = " . $_POST['ciudad4'] . "<br/>
                
            Tarifas = US$" . $_POST['tarifas4'] . "<br/>
            Adicionales = US$" . $_POST['adicionales4'] . "<br/>
            Total a Pagar = US$" . $_POST['totalpagar4'] . "<br/>
            Realizó deposito = " . $depocliente . "<br/>
            
       ";

    @mail($to, $subject, $mens, $headers);    
}

header('location:inscribete.php?enviado=true');

?>
