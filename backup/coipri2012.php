<?php
    include("inc.aplication_top.php");
	$titulof='COIPRI 2012';
		$imagenf='http://img.youtube.com/vi/d2F1QxnaW-g/0.jpg';
		$descfac='El 05 y 06 de Junio del 2012 se llevó a cabo el Segundo Congreso Internacional de Profesionales Inmobiliarios (COIPRI 2012) a manos de la Asociación Peruana de Agentes Inmobiliarios (ASPAI), logrando congregar a reconocidos especialistas nacionales e internacionales que expusieron sus puntos de vista y compartieron sus experiencias con todos los profesionales inmobiliarios e interesados que asistieron en las dos fechas.'; 
	
?>

<meta property="og:title" content="<?php echo htmlspecialchars($titulof); ?>"/>
<meta property="og:image" content="<?php echo $imagenf; ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($descfac); ?>"/>

<?php 	
	
	
	
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
                        <div class="coipri2010">
                            <h2>COIPRI 2012</h2>
                            <div class="conten_conten_coipri2010">
                                <p> El 05 y 06 de Junio del 2012 se llevó a cabo el Segundo Congreso Internacional de Profesionales Inmobiliarios (COIPRI 2012) a manos de la Asociación Peruana de Agentes Inmobiliarios (ASPAI), logrando congregar a reconocidos especialistas nacionales e internacionales que expusieron sus puntos de vista y compartieron sus experiencias con todos los profesionales inmobiliarios e interesados que asistieron en las dos fechas.</p>
                                <p>&nbsp;</p>
                                <p>A continuación les mostramos el Video Resumen de lo que fue el COIPRI 2012..</p>
                                <p>&nbsp;</p>
                                 <p><a style="margin-right:10px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/coipri2012.php','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="f1.jpg"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('COIPRI 2012') ?> - http://coipri.pe/coipri2012.php','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="t1.jpg"></a></p>
                                
                            </div>
                        </div>
                        <div class="videos">
                            <div class="conten_videos">
                                <iframe width="511" height="376" src="http://www.youtube.com/embed/d2F1QxnaW-g" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?>    
