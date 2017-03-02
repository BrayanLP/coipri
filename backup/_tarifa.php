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
                    	<h2>Tarifas</h2>
                        <div class="contens">
                        	<div class="tarifas">
                            
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                            <div class="cuadro_tarifas">
                               <style>
                               #pres1{height:55px !important;}
                              #pres1 .personas{font-weight:bold !important;}
							  #pres1 .precios_inscripcion{font-weight:bold !important;}
							  #titf1{background:#328FA4 !important;font-size:16px !important;color:#FFF !important;font-weight:bold !important}
							  #preve{font-size:16px !important;color:#FFF !important;font-weight:bold !important;position:absolute; margin-left: -168px;
    margin-top: -18px;}
							
							#visacard{ margin-top: 20px;}
							#visacard p{font-family:DroidSansRegular,Helvetica,sans-serif;
font-size:11px;
line-height:146%;
color:rgb(89,89,89);
text-align:left;margin-top:5px;
}
							  
                               </style> 
                                
                                    <h3>COSTOS DE INSCRIPCIÓN</h3>
                                    <div class="conten_tarifas">
                                                    
           
         
                    <div id="titf2" class="titulo_fecha" style="padding:5px 170px 0 20px">Tarifas</div>
            <div id="pres2" class="precios">
                    <div class="personas">
                        Asociados:<br>
                        No Asociados:<br>
                        Tarifa Corporativa No Asociados:<br>
                       
                      
                       Extranjeros No Asociados x 01 día:<br>
                       Extranjeros No Asociados x 02 días:
                    </div>
                    <div class="precios_inscripcion">
                                        S/.  750.00 <br>
                            S/.  850.00 <br>
                            S/.  2295.00 (x3 personas)<br>
                            US$  250.00 <br>
                            US$  350.00 <br>
                                   
                    </div>
            </div>
            <br>       
               
                                  </div>
                                </div>
                            
                            
                            
                            
                            
                              <?php
                                            $tar = new Inscritos();
                                           
                                        ?>
                            
                            
                            
                            
                            
                            	<?php /*?><div class="cuadro_tarifas">
                               <style>
                               #pres1{height:55px !important;}
                              #pres1 .personas{font-weight:bold !important;}
							  #pres1 .precios_inscripcion{font-weight:bold !important;}
							  #titf1{background:#328FA4 !important;font-size:16px !important;color:#FFF !important;font-weight:bold !important}
							  #preve{font-size:16px !important;color:#FFF !important;font-weight:bold !important;position:absolute; margin-left: -168px;
    margin-top: -18px;}
							
							#visacard{ margin-top: 20px;}
							#visacard p{font-family:DroidSansRegular,Helvetica,sans-serif;
font-size:11px;
line-height:146%;
color:rgb(89,89,89);
text-align:left;margin-top:5px;
}
							  
                               </style> 
                                
                                    <h3>COSTOS DE INSCRIPCIÓN</h3>
                                    <div class="conten_tarifas">
                                        <?php
                                            $tar = new Inscritos();
                                            $tar->printTarifas(); 
                                        ?>
                                <!--      <div style="margin: 0 auto; width:249px;"><a href="mailto:coipri2012@coipri.pe"><img src="aplication/webroot/imgs/banner-promo-especial.png" alt="PROMOCIÓN ESPECIAL: El 6to es GRATIS!!!" width="249" height="112" border="0" title="PROMOCIÓN ESPECIAL: El 6to es GRATIS!!!"></a></div><br>
                                     <div style="padding:0 20px;">
                                      <strong>Si desea acceder a la PROMOCIÓN ESPECIAL, llámenos al: (551) 4220171 anexo 21 / (551) 2221856 Anexo 21 / (511) 7980435 o mándanos un correo a <a href="mailto:coipri2012@coipri.pe">coipri2012@coipri.pe</a></strong><a href="mailto:coipri2012@coipri.pe"></a></div>-->
                                  </div>
                                </div><?php */?>
                                
                                
                                
                                
                                <br />
                                <p><b>INCLUYE:</b></p>
                                <p>
                                    Material de estudio, certificado de participación, dos coffee breaks y 
                                    estacionamiento tarifa plana por día  (Sujeto a espacio).
                                </p>
                            </div>
                            <div class="adicionales">
                            	<div class="cuadro_adicionales">
                                	<h3>ADICIONALES: (opcional)</h3>
                                    <div class="conten_almuerzos">
                                    	Almuerzo Día 1 <br />
                                        Almuerzo Día 2<br />
                                        Paquete para Asociados ASPAI 02 días<br />
                                    </div>
                                    <div class="precio_almuerzos">
                                        <div class="let">
                                            <?php
                                                $tar->listAdicionalesNacionalesTar(); 
                                            ?>                                            
                                        </div>
                                       <!-- <div class="rit">
                                            <?php
                                                $tar->listAdicionalesExtranjerosTar();
                                            ?>                                            
                                        </div>-->
                                    </div>
                                </div>
                                <div id="visacard">
                               <p> <img src="visa.png"></p>
                               
                               <p>* Para pago con VISA, acérquese a las oficias de ASPAI.</p>
                                
                                </div>
                                <p>&nbsp;</p><p>&nbsp;</p>
                               
                                <div class="depoextra" style="border-color:#4599AB;background:#4599AB;width:349px;height:88px;color: #FFFFFF;margin: 0;padding: 7px; text-align: center;font-size:14px; ">
                                        <div style="color:#FCFF00;font-size:16px;font-weight:bold;text-align:center;margin-bottom:8px;margin-top:10px;">Only for foreigners</div>
                                        
                                        For any additional questions please contact mail  <br> <a  style="color:#FCFF00;font-size:14px;font-weight:bold;" href="mailto:coordinacion@coipri.pe">coordinacion@coipri.pe</a>
                                        
                                        </div>
                                
                                
                                <!--<div id="conten_btn_inscribirse">
                                	<a href="inscribete.php" class="btn_inscribirse" title="Incríbete"></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?> 
