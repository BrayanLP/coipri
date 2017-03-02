<?php

class Sliders {

    function __construct() {
        
    }

    public function listSliders() {
        ?>	 		
                            
                                <li>
                                    <ul>
                                        <li class="type-3">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 20';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                               
                                                <span>
                                                    <div class="flir">       
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>
                                                    </div>
                                                </span>
                                                <img height="298" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb.jpg";} ?>" alt=""/>
                                            </a>
                                            <?php
                                                }
                                            ?>                                            
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 19';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                               
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 15';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                 
                                                <span>
                                                    <div class="flir">
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 16';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                  
                                                <span>
                                                    <div class="flir">     
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 17';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                               
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                               
                                                <span>
                                                    <div class="flir">      
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 18';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                                
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                               
                                                <span>
                                                    <div class="flir">     
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 21';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                               
                                                <span>
                                                    <div class="flir">       
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 22';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">      
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-3">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 23';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">      
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="298" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-3">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 24';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                 
                                                <span>
                                                    <div class="flir">     
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="298" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 25';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 26';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                  
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 27';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 28';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                               
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                  
                                                <span>
                                                    <div class="flir">   
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 29';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">   
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 30';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">       
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 31';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">      
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-3">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 32';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                  
                                                <span>
                                                    <div class="flir">     
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="298" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-3">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 33';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">   
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="298" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 34';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 35';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                 
                                                <span>
                                                    <div class="flir">     
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  

                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 36';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                                
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-1">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 37';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                             
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="158" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb2.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 38';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                              
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                  
                                                <span>
                                                    <div class="flir">    
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>                                                
                                            </a>
                                        </li>
                                        <li class="type-2">
                                            <?php
                                                $sql = 'SELECT id, nombre_evento, empresa, fecha, imagen_slider  FROM sliders WHERE id = 39';
                                                $query = new Consulta($sql);
                                                while ($row = $query->VerRegistro()) {
                                            ?>                                               
                                            <a class="article-icon" rel="#over-slider" title="" href="slider-overlays.php?id=<?php echo $row['id']?>">                                                   
                                                <span>
                                                    <div class="flir">  
                                                        <strong><?php echo $row['nombre_evento'] ?></strong>
                                                        <div class="resumen">
                                                            <?php echo $row['empresa'] ?><br/>
                                                            <?php echo fecha_long($row['fecha']) ?>
                                                        </div>
                                                        <em class="more">Ver más &#187;</em>  
                                                    </div>
                                                </span>
                                                <img height="148" width="318" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen_slider'])){echo $row['imagen_slider'];}else{echo "timthumb6.jpg";} ?>" alt=""/>
                                                <?php
                                                    }
                                                ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
        <?php          
        }
        
        public function listSlidersOverlay($param) {
            $query = new Consulta("SELECT id, empresa, nombre_evento, fecha, hora, direccion, precio, edad, descripcion,tipo, imagen, url FROM sliders WHERE id = ".$_GET['id']." ");
            while ($row = $query->VerRegistro()) {
                ?>
                 <div class="cont-over-slider">
                    <h3 class="bebas"><?php echo $row['nombre_evento'] ?></h3>
                    <p><strong>Empresa:</strong></p>
                    <p><?php echo $row['empresa']?></p>
					<div class="espacio"></div>
					<p><strong>Fecha:</strong></p>
					<p><?php echo fecha_long($row['fecha']) ?></p>					
                    <div class="espacio"></div>
                    <p><strong>Hora:</strong></p>
                    <p><?php echo $row['hora'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Dirección:</strong></p>
                    <p><?php echo $row['direccion'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Mínimo de edad:</strong></p>
                    <p><?php echo $row['edad'] ?></p>
                    <div class="espacio"></div>					
                    <p><strong>Precios:</strong></p>
                    <p><?php echo $row['precio'] ?></p>
                    <div class="espacio"></div>
                    <p><strong>Descripción:</strong></p>
                    <p>
                        <?php echo $row['descripcion'] ?>                  
                    </p><br/>
                    <hr /><br/>
                    <p>
                        <img style="width: 462px;" src="aplication/webroot/imgs/fotos/<?php if(!empty($row['imagen'])){echo $row['imagen'];}else{echo "foto-overlay-program.jpg";} ?>" alt="<?php echo $row['nombre_evento']?>" title="<?php echo $row['nombre_evento']?>"/>
                    </p>
                    <div class="espacio"></div>
                    <p>
                        <a href="<?php echo $row['empresa'] ?> " title="<?php echo $row['empresa'] ?> " target="_blank"><?php echo $row['url'] ?> </a>
                    </p>
                    <div class="espacio"></div>
                </div>
                <?php
            }
        }
    
}