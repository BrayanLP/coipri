<?php
    include("inc.aplication_top.php");
    include(_includes_ . "inc.header.php");
?>
<body>
        <div id="window">
            <?php
                include(_includes_ . "inc.top.php");
            ?>  
            <div id="contenedor">
                <div id="pagina">
                    <div id="contenido">
                        <div id="form">
                            <h1>Inscríbete</h1>
                            <div class="left-form">
                                
                                <div class="cont-left">
                                    <h4>Tarifas:</h4>
                                    <div class="tar">
                                        <?php
                                            $listTar = new Inscritos();
                                            $listTar->listTarifas();
                                        ?>
                                        <!--<div style="margin: 0 auto; width:249px;">
                                        
                                        <a href="mailto:coipri2012@coipri.pe"><img src="aplication/webroot/imgs/banner-promo-especial.png" alt="PROMOCIÓN ESPECIAL: El 6to es GRATIS!!!" width="249" height="112" border="0" title="PROMOCIÓN ESPECIAL: El 6to es GRATIS!!!"></a>
                                        
                                        </div><br> -->
                                     <!--<div style="padding:0 20px;">
                                      <strong>Si desea acceder a la PROMOCIÓN ESPECIAL, llámenos al: (551) 4220171 anexo 21 / (551) 2221856 Anexo 21 / (511) 7980435 o mándanos un correo a <a href="mailto:coipri2012@coipri.pe">coipri2014@coipri.pe</a></strong><a href="mailto:coipri2012@coipri.pe"></a></div>-->
                                      <div class="clear"></div>
                                        <h4>INCLUYE:</h4>
                                        <P>
                                            Material de estudio, certificado de participación, dos coffee breaks y 
                                            estacionamiento tarifa plana por día (Sujeto a espacio).
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="formpago">
                                        <h4>Formas de Pago</h4>
                                        <p>
                                            <span>Depósito Bancario a SCOTIABANK</span><br/>
                                            Cta. Corriente en Soles: No. 000-1831062<br/><br/>

                                            <span>Transferencia Interbancaria</span><br/>
                                            CCI Soles: 009-220-000001831062-53<br/><br/>
                                            
                                            <span>Pago con Tarjeta VISA</span><br/>
                                            Acérquese a las oficinas de ASPAI<br/><br/>
                                        <p><br/>
                                            Si realizó la transferencia interbancaria por Internet, por favor envíenos el
                                            correo de confirmación a <a href="mailto:coipri2014@coipri.pe">coipri2014@coipri.pe</a>                                        </p>
<br/>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="foot-left">
                                        
                                </div>     
                            </div>
                            <div class="cont-form">
                                <div id="bloquea">
                                    <div class="bloimg"><img src="aplication/webroot/imgs/select-tarifa.png" alt="Seleccione Tarifa" title="Seleccione Tarifa" /></div>
                                </div>
                                <?php
                                    $fechaActual = date('Y-m-d');
                                    $listTar->codTarifas();
                                    $fechabase = $listTar->_fechas[0]['fecha'];
                                    if($fechaActual <= $fechabase){
                                        $idhide1 = 1; 
                                        $idhide2 = 2; 
                                        $idhide3 = 3; 
                                        $idhide4 = 4;                                         
                                    }else{
                                        $idhide1 = 5; 
                                        $idhide2 = 6; 
                                        $idhide3 = 7; 
                                        $idhide4 = 8; 
                                    }
                                ?>                             
                                <form id="formincrip1" onSubmit="return validate1(this,1)" name="formincrip1" method="POST" action="enviar-inscritos.php" enctype="multipart/form-data" style="display: block;"><!--onsubmit="return validate(this,1)"-->
                                    <input class="idhide1" type="hidden" name="idhide1" value="<?php echo $idhide1; ?>" id="idhide1"/>
                                    <div id="ficha1">
                                        <h4>Ficha de Inscripción: <label class="asociado">ASOCIADOS</label></h4>
                                        <div class="fich">
                                            <div class="asocc">
                                                <div>
                                                    <label class="obliga">(*)</label>
                                                    <label>Nº de Asociado:</label>
                                                    <input type="text" name="numasociado1" id="numasociado1" />                                                    
                                                </div>
                                            </div>
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Nombres:</label>
                                                        <input type="text" name="nombres1" id="nombres1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Empresa:</label>
                                                        <input type="text" name="empresa1" id="empresa1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Cargo:</label>
                                                        <input type="text" name="cargo1" id="cargo1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">E-mail:</label>
                                                        <input type="text" name="email1" id="email1"/>                                                    
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Apellidos:</label>
                                                        <input type="text" name="apellidos1" id="apellidos1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">RUC:</label>
                                                        <input type="text" name="ruc1" id="ruc1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Teléfonos:</label>
                                                        <input type="text" name="telefono1" id="telefono1"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Celular:</label>
                                                        <input type="text" name="celular1" id="celular1"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="regisvivi">
                                                    <span class="textase">Registrado en Ministerio de Vivienda:</span>
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="registrado1" value="si"/>
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="registrado1" value="no"/>
                                                </div>                                   
                                            </div>
                                            <div class="areass" id="numreg1" style="display: none">
                                                <span>Nº de Registro:</span>
                                                <input type="text" name="nroregistro1" id="nroregistro1"/>
                                            </div>
                                        </div>                                        
                                        <div class="adic">
                                          <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesNacionales($idhide1);
                                            ?>
                                        </div>
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div class="datos">
                                        <h4>Datos de Facturación</h4>
                                        <div class="put">
                                            <div class="iz"><span>Razón Social:</span><input type="text" name="razonsocial1" id="razonsocial1"/></div>
                                            <div class="de"><span>RUC:</span><input type="text" name="rucdatos1" id="rucdatos1"/></div>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Correo Empresa:</span><input type="text" name="correoempre1" id="correoempre1"/></div>
                                            <div class="de"><span>Teléfono Empresa:</span><input type="text" name="telefonoempre1" id="telefonoempre1"/></div>
                                        </div>                                        
                                        <div class="put">
                                            <span>Dirección:</span>
                                            <input type="text" name="direccion1" class="direccion" id="direccion1"/>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Distrito:</span><input type="text" name="distrito1" id="distrito1"/></div>
                                            <div class="de"><span>Ciudad:</span><input type="text" name="ciudad1" id="ciudad1"/></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="formas">
                                        <div class="tot">
                                            <h4>Total:</h4>
                                            <div class="con">
                                                <span>Tarifas: </span><input type="text" name="tarifas1" id="tarifas1" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Adicionales: </span><input type="text" name="adicionales1" id="adicionales1" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Total a Pagar: </span><input type="text" name="totalpagar1" id="totalpagar1" dir="rtl"  value="0.00" readonly/><br/>                                            
                                            </div>
                                        </div>
                                        <div class="depo">
                                            <input type="checkbox" name="deposito1" id="deposito1" value="deposito1" />  Realicé el pago mediante Depósito y deseo adjuntar el Voucher o Recibo.
                                            <div class="clear"></div>
                                            <div class="boucher1" id="boucher1" style="display: none">
                                                <input type="file" name="boucher1" id="boucher1"/><br/>
                                                El archivo debe pesar como máximo 700 Kb
                                            </div>                                        
                                        </div>                                        
                                    </div>
                                    <div class="clear"></div>
                                    <div class="btns-form">
                                        <input type="submit" name="enviar" value="Enviar"/>  <input type="reset" name="reset" value="Borrar todo"/><br/>
                                        <div class="clear"></div>
                                        <span class="import">(*) campos Obligatorios</span>
                                    </div>              
                                </form>       
                                <form id="formincrip2" onSubmit="return validate2(this,1)" name="formincrip2" method="POST" action="enviar-inscritos.php" enctype="multipart/form-data" style="display: none;"><!--onsubmit="return validate(this,1)"-->
                                    <input class="idhide2" type="hidden" name="idhide2" value="<?php echo $idhide2; ?>" id="idhide2"/>
                                    <div id="ficha1">
                                        <h4>Ficha de Inscripción: <label class="noasociado" >NO ASOCIADO</label></h4>
                                        <div class="fich">
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Nombres:</label>
                                                        <input type="text" name="nombres2" id="nombres2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Empresa:</label>
                                                        <input type="text" name="empresa2" id="empresa2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Cargo:</label>
                                                        <input type="text" name="cargo2" id="cargo2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">E-mail:</label>
                                                        <input type="text" name="email2" id="email2"/>                                                    
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Apellidos:</label>
                                                        <input type="text" name="apellidos2" id="apellidos2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">RUC:</label>
                                                        <input type="text" name="ruc2" id="ruc2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Teléfonos:</label>
                                                        <input type="text" name="telefono2" id="telefono2"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Celular:</label>
                                                        <input type="text" name="celular2" id="celular2"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="asesor2" value="si"/> 
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="asesor2" value="no"/>
                                                </div>
                                                <div class="regisvivi">
                                                    <span class="textase">Registrado en Ministerio de Vivienda:</span>
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="registrado2" value="si"/>
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="registrado2" value="no"/>
                                                </div>                                   
                                            </div>
                                            <div class="areass" id="numreg" style="display: none">
                                                <span>Nº de Registro:</span>
                                                <input type="text" name="nroregistro2" id="nroregistro2"/>
                                            </div>
                                        </div>
                                        <div class="adic">
                                            <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesNacionales($idhide2);
                                            ?>
                                        </div>
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div class="datos">
                                        <h4>Datos de Facturación</h4>
                                        <div class="put">
                                            <div class="iz"><span>Razón Social:</span><input type="text" name="razonsocial2" id="razonsocial2"/></div>
                                            <div class="de"><span>RUC:</span><input type="text" name="rucdatos2" id="rucdatos2"/></div>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Correo Empresa:</span><input type="text" name="correoempre2" id="correoempre2"/></div>
                                            <div class="de"><span>Teléfono Empresa:</span><input type="text" name="telefonoempre2" id="telefonoempre2"/></div>
                                        </div>                                         
                                        <div class="put">
                                            <span>dirección:</span>
                                            <input type="text" name="direccion2" class="direccion" id="direccion2"/>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Distrito:</span><input type="text" name="distrito2" id="distrito2"/></div>
                                            <div class="de"><span>Ciudad:</span><input type="text" name="ciudad2" id="ciudad2"/></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="formas">
                                        <div class="tot">
                                            <h4>Total:</h4>
                                            <div class="con">
                                                <span>Tarifas: </span><input type="text" name="tarifas2" id="tarifas2" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Adicionales: </span><input type="text" name="adicionales2" id="adicionales2" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Total a Pagar: </span><input type="text" name="totalpagar2" id="totalpagar2" dir="rtl"  value="0.00" readonly/><br/>    
                                            </div>
                                        </div>
                                        <div class="depo">
                                            <input type="checkbox" name="deposito2" id="deposito2" value="deposito2" />  Realicé el pago mediante Depósito y deseo adjuntar el Voucher o Recibo.
                                            <div class="clear"></div>
                                            <div class="boucher2" id="boucher2" style="display: none">
                                                <input type="file" name="boucher2" id="boucher2"/><br/>
                                                El archivo debe pesar como máximo 700 Kb
                                            </div>                                        
                                        </div>                                        
                                    </div>
                                    <div class="clear"></div>                                    
                                    <div class="btns-form">
                                        <input type="submit" name="enviar" value="Enviar"/>  <input type="reset" name="reset" value="Borrar todo"/><br/>
                                        <div class="clear"></div>
                                        <span class="import">(*) campos Obligatorios</span>
                                    </div>              
                                </form> 
                                <form id="formincrip3" onSubmit="return validate3(this,1)" name="formincrip3" method="POST" action="enviar-inscritos.php" enctype="multipart/form-data" style="display: none;"><!--onsubmit="return validate(this,1)"-->
                                    <input class="idhide3" type="hidden" name="idhide3" value="<?php echo $idhide3; ?>" id="idhide3"/>
                                    <div id="ficha1">
                                        <h4>Ficha de Inscripción<text class="num"> 1</text>: <label class="corporativa">CORPORATIVA</label></h4>
                                        <div class="fich">
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Nombres:</label>
                                                        <input type="text" name="nombres3" id="nombres3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Empresa:</label>
                                                        <input type="text" name="empresa3" id="empresa3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Cargo:</label>
                                                        <input type="text" name="cargo3" id="cargo3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">E-mail:</label>
                                                        <input type="text" name="email3" id="email3"/>                                                    
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Apellidos:</label>
                                                        <input type="text" name="apellidos3" id="apellidos3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">RUC:</label>
                                                        <input type="text" name="ruc3" id="ruc3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Teléfonos:</label>
                                                        <input type="text" name="telefono3" id="telefono3"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Celular:</label>
                                                        <input type="text" name="celular3" id="celular3"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="asesor3" value="si"/> 
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="asesor3" value="no"/>
                                                </div>
                                                <div class="regisvivi">
                                                    <span class="textase">Registrado en Ministerio de Vivienda:</span>
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="registrado3" value="yes"/>
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="registrado3" value="no"/>
                                                </div>                                   
                                            </div>
                                            <div class="areass" id="numreg3" style="display: none">
                                                <span>Nº de Registro:</span>
                                                <input type="text" name="nroregistro3" id="nroregistro3"/>
                                            </div>
                                        </div>
                                        <div class="adic">
                                            <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesNacionales($idhide3);
                                            ?>
                                        </div>
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div id="ficha2">
                                        <h4>Ficha de Inscripción 2: <label>CORPORATIVA</label></h4>
                                        <div class="fich">
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Nombres:</label>
                                                        <input type="text" name="nombres23" id="nombres23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>Empresa:</label>
                                                        <input type="text" name="empresa23" id="empresa23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>Cargo:</label>
                                                        <input type="text" name="cargo23" id="cargo23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>E-mail:</label>
                                                        <input type="text" name="email23" id="email23"/> 
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Apellidos:</label>
                                                        <input type="text" name="apellidos23" id="apellidos23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>RUC:</label>
                                                        <input type="text" name="ruc23" id="ruc23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Teléfonos:</label>
                                                        <input type="text" name="telefono23" id="telefono23"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Celular:</label>
                                                        <input type="text" name="celular23" id="celular23"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span><input type="radio" name="asesor23" value="si"/> 
                                                    <span class="yesno">No</span><input type="radio" name="asesor23" value="no"/>
                                                </div>
                                                <div class="regisvivi">
                                                    <span class="textase">Registrado en Ministerio de Vivienda:</span> 
                                                    <span class="yesno">Si</span><input type="radio" name="registrado23" value="yes"/> 
                                                    <span class="yesno">No</span><input type="radio" name="registrado23" value="no"/>    
                                                </div>
                                            </div>
                                            <div class="areass" id="numreg4"  style="display: none">
                                                <span>Nº de Registro:</span>
                                                <input type="text" name="nroregistro23" id="nroregistro23"/>
                                            </div>
                                        </div>
                                        <div class="adic">
                                            <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesNacionales2($idhide3);
                                            ?>
                                        </div>
                                       
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div id="ficha3">
                                        <h4>Ficha de Inscripción 3: <label>CORPORATIVA</label></h4>
                                        <div class="fich">
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Nombres:</label>
                                                        <input type="text" name="nombres33" id="nombres33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>Empresa:</label>
                                                        <input type="text" name="empresa33" id="empresa33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>Cargo:</label>
                                                        <input type="text" name="cargo33" id="cargo33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>E-mail:</label>
                                                        <input type="text" name="email33" id="email33"/>                                                    
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Apellidos:</label>
                                                        <input type="text" name="apellidos33" id="apellidos33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label>RUC:</label>
                                                        <input type="text" name="ruc33" id="ruc33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Teléfonos:</label>
                                                        <input type="text" name="telefono33" id="telefono33"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label>Celular:</label>
                                                        <input type="text" name="celular33" id="celular33"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span><input type="radio" name="asesor33"/> 
                                                    <span class="yesno">No</span><input type="radio" name="asesor33"/>                                                    
                                                </div>
                                                <div class="regisvivi">
                                                    <span class="textase">Registrado en Ministerio de Vivienda:</span> 
                                                    <span class="yesno">Si</span><input type="radio" name="registrado33" value="yes"/> 
                                                    <span class="yesno">No</span><input type="radio" name="registrado33" value="no"/>                                                     
                                                </div>                                           
                                            </div>
                                            <div class="areass" id="numreg5"  style="display: none">
                                                <span>Nº de Registro:</span>
                                                <input type="text" name="nroregistro33" id="nroregistro33"/>
                                            </div>
                                        </div>
                                        <div class="adic">
                                            <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesNacionales3($idhide3);
                                            ?>
                                        </div>
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div class="datos">
                                        <h4>Datos de Facturación</h4>
                                        <div class="put">
                                            <div class="iz"><label class="obliga">(*)</label><span>Razón Social:</span><input type="text" name="razonsocial3" id="razonsocial3"/></div>
                                            <div class="de"><label class="obliga">(*)</label><span>RUC:</span><input type="text" name="rucdatos3" id="rucdatos3"/></div>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><label class="obliga">(*)</label><span>Correo Empresa:</span><input type="text" name="correoempre3" id="correoempre3"/></div>
                                            <div class="de"><label class="obliga">(*)</label><span>Teléfono Empresa:</span><input type="text" name="telefonoempre3" id="telefonoempre3"/></div>
                                        </div>                                         
                                        <div class="put">
                                            <div class="cen">
                                                <label class="obliga">(*)</label>
                                                <span>dirección:</span>
                                                <input type="text" name="direccion3" class="direccion" id="direccion3"/>                                                
                                            </div>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><label class="obliga">(*)</label><span>Distrito:</span><input type="text" name="distrito3" id="distrito3"/></div>
                                            <div class="de"><label class="obliga">(*)</label><span>Ciudad:</span><input type="text" name="ciudad3" id="ciudad3"/></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="formas">
                                        <div class="tot">
                                            <h4>Total:</h4>
                                            <div class="con">
                                                <span>Tarifas: </span><input type="text" name="tarifas3" id="tarifa3" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Adicionales: </span><input type="text" name="adicionales3" id="adicionales3" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Total a Pagar: </span><input type="text" name="totalpagar3" id="totalpagar3" dir="rtl"  value="0.00" readonly/><br/>                                            
                                            </div>
                                        </div>
                                        <div class="depo">
                                            <input type="checkbox" name="deposito3" id="deposito3" value="deposito3" />  Realicé el pago mediante Depósito y deseo adjuntar el Voucher o Recibo.
                                            <div class="clear"></div>
                                            <div class="boucher3" id="boucher3" style="display: none">
                                                <input type="file" name="boucher3" id="boucher3"/><br/>
                                                El archivo debe pesar como máximo 700 Kb
                                            </div>                                        
                                        </div>                                        
                                    </div>
                                    <div class="clear"></div>                                    
                                    <div class="btns-form">
                                        <input type="submit" name="enviar" value="Enviar"/>  <input type="reset" name="reset" value="Borrar todo"/><br/>
                                        <div class="clear"></div>
                                        <span class="import">(*) campos Obligatorios</span>
                                    </div>              
                                </form> 
                                <form id="formincrip4" onSubmit="return validate4(this,1)" name="formincrip4" method="POST" action="enviar-inscritos.php" enctype="multipart/form-data" style="display: none;"><!--onsubmit="return validate4(this,1)""-->
                                    <input class="idhide4" type="hidden" name="idhide4" value="<?php echo $idhide4; ?>" id="idhide4"/>
                                    <div id="ficha1">
                                        <h4>Ficha de Inscripción: <label class="extranjeros" >EXTRANJEROS NO ASOCIADOS</label></h4>
                                        <div class="fich">
                                            <div class="gener">
                                                <div class="iz">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Nombres:</label>
                                                        <input type="text" name="nombres4" id="nombres4" class="nombres"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Empresa:</label>
                                                        <input type="text" name="empresa4" id="empresa4"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">Cargo:</label>
                                                        <input type="text" name="cargo4" id="cargo4"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">E-mail:</label>
                                                        <input type="text" name="email4" id="email4"/>                                                    
                                                    </div>
                                                </div>
                                                <div class="de">
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Apellidos:</label>
                                                        <input type="text" name="apellidos4" id="apellidos4"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="lab">RUC:</label>
                                                        <input type="text" name="ruc4" id="ruc4"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Teléfonos:</label>
                                                        <input type="text" name="telefono4" id="telefono4"/>                                                    
                                                    </div>
                                                    <div>
                                                        <label class="obliga">(*)</label>
                                                        <label class="lab">Celular:</label>
                                                        <input type="text" name="celular4" id="celular4"/>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="asereg">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="asesor4" value="si"/> 
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="asesor4" value="no"/>
                                                </div>                                  
                                            </div>
                                        </div>                                        
                                        <div class="asereg" style="display: none;">
                                            <div class="options">
                                                <div class="asesorinm">
                                                    <span class="textase">Asesor Inmobiliario:</span> 
                                                    <span class="yesno">Si</span>
                                                    <input type="radio" name="asesor4" value="si"/> 
                                                    <span class="yesno">No</span>
                                                    <input type="radio" name="asesor4" value="no"/>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div class="adic">
                                            <h4>Adicionales: <label class="asociado">(opcional)</label></h4>
                                            <?php
                                                $listAdic = new Inscritos();
                                                $listAdic->listAdicionalesExtranjeros($idhide4);
                                            ?>
                                        </div>
                                        <div class="bot-form">
                                        </div>
                                    </div>
                                    <div class="datos">
                                        <h4>Datos de Facturación</h4>
                                        <div class="put">
                                            <div class="iz"><span>Razón Social:</span><input type="text" name="razonsocial4" id="razonsocial4"/></div>
                                            <div class="de"><span>RUC:</span><input type="text" name="rucdatos4" id="rucdatos4"/></div>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Correo Empresa:</span><input type="text" name="correoempre4" id="correoempre4"/></div>
                                            <div class="de"><span>Teléfono Empresa:</span><input type="text" name="telefonoempre4" id="telefonoempre4"/></div>
                                        </div>                                         
                                        <div class="put">
                                            <span>dirección:</span>
                                            <input type="text" name="direccion4" class="direccion" id="direccion4"/>
                                        </div>
                                        <div class="put">
                                            <div class="iz"><span>Distrito:</span><input type="text" name="distrito4" id="distrito4"/></div>
                                            <div class="de"><span>Ciudad:</span><input type="text" name="ciudad4" id="ciudad4"/></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="formas">
                                        <div class="tot">
                                            <h4>Total:</h4>
                                            <div class="con">
                                                <span>Tarifas: </span><input type="text" name="tarifas4" id="tarifas4" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Adicionales: </span><input type="text" name="adicionales4" id="adicionales4" dir="rtl" value="0.00" readonly/><br/>
                                                <div class="clear"></div>
                                                <span>Total a Pagar: </span><input type="text" name="totalpagar4" id="totalpagar4" dir="rtl"  value="0.00" readonly/><br/>                                            
                                            </div>
                                        </div>
                                        <div class="depo">
                                            <input type="checkbox" name="deposito4" id="deposito4" value="deposito4" />  Realicé el pago mediante Depósito y deseo adjuntar el Voucher o Recibo.
                                            <div class="clear"></div>
                                            <div class="boucher4" id="boucher4" style="display: none">
                                                <input type="file" name="boucher4" id="boucher4"/><br/>
                                                El archivo debe pesar como máximo 700 Kb
                                            </div>                                        
                                        </div>                                        
                                    </div>
                                    <div class="clear"></div>                                    
                                    <div class="btns-form">
                                        <input type="submit" name="enviar" value="Enviar"/>  <input type="reset" name="reset" value="Borrar todo"/><br/>
                                        <div class="clear"></div>
                                        <span class="import">(*) campos Obligatorios</span>
                                    </div>              
                                </form> 
                            </div>
                            <?php
                                $enviado = $_GET['enviado'];
                                if(!empty($enviado)){
                            ?>
                                <div id="confirmacion">
                                    <div class="centro">
                                        <p>
                                            Se genero con exito su ficha de inscripcion.<br />
                                            Se estara enviando una copia al correo ingresado.<br/>
                                            Gracias
                                        </p>                                        
                                    </div>
                                </div>                                  
                            <?php
                                }
                            ?>                             
                        </div>
                    </div>
                </div>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?> 
