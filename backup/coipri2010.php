<?php
    include("inc.aplication_top.php");
	
	$titulof='COIPRI 2010';
		$imagenf='http://img.youtube.com/vi/kR6iB1otcww/0.jpg';
		$descfac='Hace cuatro años organizamos, por primera vez, el Congreso Internacional de Profesionales Inmobiliarios (COIPRI) convencidos de que era necesario crear un espacio para intercambiar ideas sobre la cada vez más dinámica y creciente actividad inmobiliaria. Nuestra convocatoria fue auspiciosa, consiguiendo más de 650 participantes que, durante dos días, presenciaron lúcidas exposiciones de especialistas del sector así como de autoridades del gobierno llegando a la conclusión de que el título escogido para el congreso: “Perú… tu mejor opción” era el que mejor describía el momento por el que atravesaba la industria inmobiliaria en nuestro país. '; 
	
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
                            <h2>COIPRI 2010</h2>
                            <div class="conten_conten_coipri2010">
                                <p>
                                    Hace cuatro años organizamos, por primera vez, el Congreso Internacional de Profesionales Inmobiliarios (COIPRI) convencidos de que era necesario crear un espacio para intercambiar ideas sobre la cada vez más dinámica y creciente actividad inmobiliaria. Nuestra convocatoria fue auspiciosa, consiguiendo más de 650 participantes que, durante dos días, presenciaron lúcidas exposiciones de especialistas del sector así como de autoridades del gobierno llegando a la conclusión de que el título escogido para el congreso: “Perú… tu mejor opción” era el que mejor describía el momento por el que atravesaba la industria inmobiliaria en nuestro país. 
                                </p><br/>
                                <p>
                                    Pero las imágenes pueden narrarnos mejor lo que significó esta primera experiencia, los invitamos a que vean este video con “lo que pasó en Coipri 2010” 
                                </p>
                                <p>&nbsp;</p>
                                <p><a style="margin-right:10px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/coipri2010.php','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="f1.jpg"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('COIPRI 2010') ?> - http://coipri.pe/coipri2010.php','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="t1.jpg"></a></p>
                            </div>
                        </div>
                        <div class="videos">
                            <div class="conten_videos">
                                <iframe width="511" height="376" src="http://www.youtube.com/embed/kR6iB1otcww" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?>    
