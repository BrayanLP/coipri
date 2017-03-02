<?php
    include("inc.aplication_top.php");
    include(_includes_ . "inc.header.php");
?>
<body onLoad="preload()">
    <!--<div id="loading-image" alt="Cargando..."></div>-->
    <div>
        <div id="intro">
            <div class="center">
                <div class="top">
                    <div class="social">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=324294394284648";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div style="float: right;" class="fb-like" data-href="https://www.facebook.com/coipri" data-send="true" data-layout="button_count" data-width="160" data-show-faces="false"></div>
                    </div>
                    <div class="logo-fecha">
                        <div class="logo">
                            <a><img src="aplication/webroot/imgs/logo-blanco.png" alt="COIPRI 2012" title="COIPRI 2012"/></a>
                        </div>
                        <div class="fecha">
                            <h1>05 y 06 de Junio</h1>
                            <h2>Delfines Hotel & Casino</h2>
                            <h5>Los Eucaliptos 555 San Isidro. Lima - Perú</h5>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <div class="ingresa">
                        <div class="btn_ingresar">
                            <a>
                                <span id="ingresar" class="bt">
                                    Ingresar
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="proximo">
                        <div class="faltan">
                            <span>Faltan</span>
                        </div>
                        <div id="defaultCountdown"></div>
                        
                        <div class="btn_incrip" style="display: none;">
                            <a href="aplication/webroot/pdfs/Ficha de inscripción.pdf" target="_blank"><img src="aplication/webroot/imgs/btn-ficha-inscripcion.png" alt="Descarga Ficha Incripción" title="Descarga Ficha Incripción"/></a>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="ausp">
                        <div class="aus-cont">
                            <span>Auspician:</span>
                            <ul id="auxpix">
                                <li>
                                    <a href="http://www.viabcp.com/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/bcp.jpg" alt="BCP" title="BCP"/></a>
                                    <a href="http://www.up.edu.pe/postgrado/eduejecutiva/Paginas/JER/Detalle.aspx?IdElemento=119/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/universidad-pacifico.jpg" alt="Universidad del Pacífico" title="Universidad del Pacífico"/></a>
                                    <a href="http://urbania.pe/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/urbania.jpg" alt="URBANIA" title="URBANIA"/></a>
                                    <a href="http://www.scotiabank.com.pe/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/scotiabank.jpg" alt="Scotibank" title="Scotibank"/></a>
                                    <a href="http://cosas.pe/casas" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/casas.jpg" alt="Casas" title="Casas"/></a>
                                    <a href="http://www.vainsa.com/vainsa/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/vainsa.jpg" alt="Vainsa" title="Vainsa"/></a>
                                </li>
                                <li>
                                    <a href="http://vargasyzuniga.com/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/vargasyzuniga-thumb.jpg" alt="Vargas & Zuniga" title="Vargas & Zuniga"/></a>
                                    <a href="http://indeart.net/indeart/index.html" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/indeArt-thumb.jpg" alt="IndeArt - Marketing y Comunicaciones" title="IndeArt - Marketing y Comunicaciones"/></a>
                                    <a href="http://www.capeco.org/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/capeco.jpg" alt="CAPECO - Cámara Peruana de la Construcción" title="IndeArt - Marketing y Comunicaciones"/></a>
                                </li>    
                            </ul>
                        </div>
                    </div>
                    <div class="orgna">
                        <div class="org-cont">
                            <span>Organizado por:</span>
                            <ul id="organix">
                                <li><a href="http://www.aspai.pe/" target="_blank"><img src="aplication/webroot/imgs/organiza/aspai.jpg" alt="Asociación Peruana de Agentes Inmobiliarios - ASPAI" title="Asociación Peruana de Agentes Inmobiliarios - ASPAI"/></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div id="window">
            <div id="conten_cabecera">
                <div id="cabecera">
                    <div class="sociall">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=324294394284648";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div style="float: right;" class="fb-like" data-href="https://www.facebook.com/coipri" data-send="true" data-layout="button_count" data-width="160" data-show-faces="false"></div>                   
                    </div>                    
                    <div id="conten_logo">
                        <div class="logo">
                            <a href="index.php"><img src="aplication/webroot/imgs/logo.png" alt="COIPRI 2012" title="COIPRI 2012"/></a>
                        </div> 
                        <div class="fecha-junio">
                            <h1>05 y 06 de Junio</h1>
                            <h2>Delfines Hotel & Casino</h2>
                            <h5>Los Eucaliptos 555 San Isidro. Lima - Perú</h5>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="conten_menu">
                <div id="menu">
                    <ul id="menu_conten">
                        <li class="present"><a href="index.php" class="men-pre <?php if((strstr($_SERVER['PHP_SELF'], 'index.php'))){echo "active";}?>" style="cursor:pointer;">Presentación</a></li>
                        <li class="nosot">
                            <a class="men-nos <?php if((strstr($_SERVER['PHP_SELF'], 'nosotros.php')) || (strstr($_SERVER['PHP_SELF'], 'coipri2010.php'))){echo "active";}?>" style="cursor:pointer;">Nosotros</a>
                            <ul id="submen">  
                                <li class="quees"><a href="nosotros.php">Que es Coipri</a></li>  
                                <li class="anios"><a href="coipri2010.php">Coipri 2010</a></li>  
                            </ul>                          
                        </li>
                        <li class="expos"><a href="expositores.php" class="men-exp <?php if((strstr($_SERVER['PHP_SELF'], 'expositores.php'))){echo "active";}?>">Expositores</a></li>
                        <li class="progr">
                            <a class="men-pro <?php if((strstr($_SERVER['PHP_SELF'], 'programas.php')) || (strstr($_SERVER['PHP_SELF'], 'programa-de-conferencia.php')) || (strstr($_SERVER['PHP_SELF'], 'business-networking.php'))){echo "active";}?>" style="cursor:pointer;">Programas</a>
                            <ul id="submen">
                                <li class="proconf"><a href="programa-de-conferencia.php">Programa de Conferencias</a></li>
                                <li class="busnet"><a href="business-networking.php">Business Networking</a></li>
                            </ul>
                        </li>
                        <li class="tarif"><a href="tarifa.php" class="men-tar <?php if((strstr($_SERVER['PHP_SELF'], 'tarifa.php'))){echo "active";}?>">Tarifas</a></li>
                        <li class="inscrib"><a href="inscribete.php" class="men-ins <?php if((strstr($_SERVER['PHP_SELF'], 'inscribete.php'))){echo "active";}?>">Inscríbete</a></li>
                        <li class="noticis"><a href="noticias.php" class="men-not <?php if((strstr($_SERVER['PHP_SELF'], 'noticias.php'))){echo "active";}?>">Noticias</a></li>
                        <li class="auspicia"><a href="auspiciadores.php" class="men-aus <?php if((strstr($_SERVER['PHP_SELF'], 'auspiciadores.php'))){echo "active";}?>">Auspiciadores</a></li>
                    </ul>                    
                </div>                  
            </div>    
            <div class="conten_banner">
                <div id="banner">
                    <div class="expose-banner" style="left: -556px;">
                        <div class="expose-text">
                            <h1><span class="comi-ini"></span><span>Desafíos y Oportunidades</span> de la Industria Inmobiliaria en el Perú<span class="comi-fin"></span></h1>
                        </div>
                    </div>
                    <div class="conten_slider theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="aplication/webroot/imgs/banner-one.gif" alt="Desafíos y Oportunidades" />
                            <img src="aplication/webroot/imgs/banner-two.gif" alt="Desafíos y Oportunidades" />
                        </div>                     
                    </div>             
                </div>                
            </div>
            <div id="contenedor">
                <div id="pagina">
                    <div id="contenido">
                        <div class="bienvenido">
                            <h1>Bienvenidos a COIPRI 2012</h1>
                            <p>
                                El sector inmobiliario es una de las actividades más dinámicas en nuestro país y crece día a día,  
                                surgiendo constantemente nuevas <span>oportunidades</span> de desarrollo. No obstante, 
                                el desafío es <span>crecer de manera inteligente</span> sentando así  las  bases para 
                                un verdadero <span>desarrollo sostenible</span>.  
                            </p><br/>
                            <p>
                                Por ello, la Asociación Peruana de Agentes Inmobiliarios (ASPAI) organiza el 
                                segundo Congreso Internacional de Profesionales Inmobiliarios (COIPRI) 
                                congregando a reconocidos especialistas nacionales e internacionales que  
                                expondrán sus puntos de vista y compartirán sus experiencias con todos los 
                                profesionales inmobiliarios interesados en 
                                hacer del sector un modelo de organización y planificación 
                                para el país.                                  
                            </p>
                            <p>
                                <img src="aplication/webroot/imgs/welcome-home.jpg" alt="Bienvenidos a COIPRI 2012" title="Bienvenidos a COIPRI 2012"/>
                            </p>
                        </div>
                        <div class="otros">
                            <div class="news">
                                <h2>COIPRI News</h2>
                                <ul id="rotatenews">
                                    <?php
                                        $listNotFront = new Noticias();
                                        $listNotFront->listNoticiasFront();
                                    ?>                                     
                                </ul>
                            </div>
                            <div class="anuncios">
                                <h2>Anuncios</h2>
                                <div class="cont-anuncios">
                                    <div class="text-anun">
                                        <h3>Si te perdiste el <span>COIPRI 2010</span></h3>
                                        <p>
                                            Mira un resumen del exito que tuvo el COIPRI 2010, realizado en el Hotel los Delfines.
                                        </p>                                        
                                    </div>
                                    <div class="video">
                                        <div class="titulo-video">
                                            <a href="coipri2010.php" title="Mira aquí el VIDEO RESUMEN"><div>Mira aquí el VIDEO RESUMEN</div></a>
                                        </div>
                                        <a href="coipri2010.php"><img src="aplication/webroot/imgs/video.jpg" alt="Mira aquí el VIDEO RESUMEN" title="Mira aquí el VIDEO RESUMEN"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conten_top-footer">
                <div id="top-footer">
                    <div class="org">
                        <span>Organiza:</span>
                        <ul id="organix2">
                            <li><a href="http://www.aspai.pe/" target="_blank"><img width="95px" src="aplication/webroot/imgs/organiza/aspai.jpg" alt="Asociación Peruana de Agentes Inmobiliarios - ASPAI" title="Asociación Peruana de Agentes Inmobiliarios - ASPAI"/></a></li>
                        </ul>                                     
                    </div>
                    <div class="aux">
                        <span>Auspician:</span>
                            <ul id="auxpix2">
                                <li>
                                    <a href="http://www.viabcp.com/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/bcp.jpg" alt="BCP" title="BCP"/></a>
                                    <a href="http://www.up.edu.pe/postgrado/eduejecutiva/Paginas/JER/Detalle.aspx?IdElemento=119/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/universidad-pacifico.jpg" alt="Universidad del Pacífico" title="Universidad del Pacífico"/></a>
                                    <a href="http://urbania.pe/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/urbania.jpg" alt="URBANIA" title="URBANIA"/></a>
                                    <a href="http://www.scotiabank.com.pe/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/scotiabank.jpg" alt="Scotibank" title="Scotibank"/></a>
                                    <a href="http://cosas.pe/casas" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/casas.jpg" alt="Casas" title="Casas"/></a>
                                    <a href="http://www.vainsa.com/vainsa/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/vainsa.jpg" alt="Vainsa" title="Vainsa"/></a>
                                </li>
                                <li>
                                    <a href="http://vargasyzuniga.com/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/vargasyzuniga-thumb.jpg" alt="Vargas & Zuniga" title="Vargas & Zuniga"/></a>
                                    <a href="http://indeart.net/indeart/index.html" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/indeArt-thumb.jpg" alt="IndeArt - Marketing y Comunicaciones" title="IndeArt - Marketing y Comunicaciones"/></a>
                                    <a href="http://www.capeco.org/" target="_blank"><img src="aplication/webroot/imgs/auspiciadores/capeco.jpg" alt="CAPECO - Cámara Peruana de la Construcción" title="IndeArt - Marketing y Comunicaciones"/></a>
                                </li>                        
                            </ul>                        
                    </div>
                </div>                  
            </div>          
        </div>
        <div id="footer">
            <div id="conten_footer">
                <div class="copyright">
                    <span>Informes:</span><br/>
                    Telf.: (551) 4220171 anexo 21 / (551) 2221856   Anexo 21 / (511) 7980435<br/>
                    E-mail: <a href="mailto:coipri2012@coipri.pe">coipri2012@coipri.pe</a><br/>
                    Dirección: Miguel Dasso 134, Of 202, San Isidro<br/>
                </div>
                <div class="powered">
                    <div class="si">
                        <span>Siguenos:</span>
                    </div>
                    <div class="icn">
                        <div class="lef">
                            <a href="#" target="_blank" title=""><img src="aplication/webroot/imgs/facebook-foot.png" alt="Facebook" title="Facebook"/></a>
                        </div>
                        <div class="rig">
                            <a href="http://www.youtube.com/user/coipri" target="_blank" title="COIPRI 2012"><img src="aplication/webroot/imgs/youtube-foot.png" alt="YouTobe" title="YouTobe"/></a>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>   