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
                        <div style="float: right;" class="fb-like" data-href="https://www.facebook.com/coipri2014" data-send="true" data-layout="button_count" data-width="160" data-show-faces="false"></div>
                    </div>
                    <div id="conten_logo">
                        <div class="logo">
                            <a href="index.php"><img src="aplication/webroot/imgs/logo.png" alt="COIPRI 2014" title="COIPRI 2014"/></a>
                        </div> 
                        <div class="fecha-junio">
                            <h1>03 y 04 de Junio</h1>
                            <h2>Delfines Hotel & Casino</h2>
                            <h5>Los Eucaliptos 555 San Isidro. Lima - Perú</h5>
                        </div>                       
                    </div>
                </div>
            </div>
            <div id="menu">
                <ul id="menu_conten">
                    <li class="present"><a href="index.php" class="men-pre <?php if((strstr($_SERVER['PHP_SELF'], 'index.php'))){echo "active";}?>" style="cursor:pointer;">Presentación</a></li>
                    <li class="nosot">
                        <a class="men-nos <?php if((strstr($_SERVER['PHP_SELF'], 'nosotros.php')) || (strstr($_SERVER['PHP_SELF'], 'coipri2010.php'))){echo "active";}?>" style="cursor:pointer;">Nosotros</a>
                        <ul id="submen">  
                                <li class="quees"><a href="nosotros.php">Qué es COIPRI</a></li>
                                <li class="quees"><a href="coipri2014.php">COIPRI 2014</a></li>
                                <li class="quees"><a href="coipri2012.php">COIPRI 2012</a></li>
                                <li class="anios"><a href="coipri2010.php">COIPRI 2010</a></li>
                        </ul>                          
                    </li>
                    <li class="expos"><a href="expositores.php" class="men-exp <?php if((strstr($_SERVER['PHP_SELF'], 'expositores.php'))){echo "active";}?>">Expositores</a></li>
                    <li class="progr">
                        <a class="men-pro <?php if((strstr($_SERVER['PHP_SELF'], 'programas.php')) || (strstr($_SERVER['PHP_SELF'], 'programa-de-conferencia.php')) || (strstr($_SERVER['PHP_SELF'], 'business-networking.php'))){echo "active";}?>" style="cursor:pointer;" href="programa-de-conferencia.php">Programa</a>
                       <!-- <ul id="submen">
                            <li class="proconf"><a href="#">Programa de Conferencias</a></li>
                            <li class="busnet"><a href="#">Business Networking</a></li>
                        </ul>-->
                    </li>
                   <!-- <li class="tarif"><a href="tarifa.php" class="men-tar <?php if((strstr($_SERVER['PHP_SELF'], 'tarifa.php'))){echo "active";}?>">Tarifas</a></li>
                    <li class="inscrib"><a href="#" class="men-ins <?php if((strstr($_SERVER['PHP_SELF'], 'inscribete.php'))){echo "active";}?>">Inscríbete</a></li>-->
                    <li class="noticis"><a href="noticias.php" class="men-not <?php if((strstr($_SERVER['PHP_SELF'], 'noticias.php'))){echo "active";}?>">Noticias</a></li>
                    <li class="auspicia"><a href="auspiciadores.php" class="men-aus <?php if((strstr($_SERVER['PHP_SELF'], 'auspiciadores.php'))){echo "active";}?>">Auspiciadores</a></li>
                </ul>
            </div>                
            <div id="banner">
                <div class="expose-banner">
                    <div class="expose-text">
                        <h1><span class="comi-ini"></span><span>PERÚ: </span> Nuevas Realidades <span>y</span> Oportunidades<span class="comi-fin"></span></h1>
                    </div>
                </div>
                <div class="conten_slider theme-default">
                    <div id="slider" class="nivoSlider">
                   <!-- <img src="aplication/webroot/imgs/banner2.gif" alt="Preventa hasta el 15 de Abril" />-->
                        	<img src="aplication/webroot/imgs/banner5.gif" alt="Desafíos y Oportunidades" />
                            <img src="aplication/webroot/imgs/banner4.gif" alt="Desafíos y Oportunidades" />
                            
                        </div>                     
                </div>             
            </div>
   