<?php

class Noticias{

    function __construct() {
        
    }
    
    public function listNoticiasFront() {
        $sql = 'SELECT * FROM noticias ORDER BY id DESC LIMIT 10';
        $query = new Consulta($sql);
        while ($row = $query->VerRegistro()) {        
        ?>
        <li style="width: 600px;">
            <div class="cont-news">
                <div class="contss">
                    <p>
                        <span><?php echo $row['titulo']?></span><br/>
                    </p>
                    <?php echo  substr($row['introduccion'], 0, 300)?>
                </div>
                <div class="imgss">
                    <img src="aplication/webroot/imgs/noticias/<?php echo $row['imagen']?>" alt="<?php echo $row['titulo']?>" title="<?php echo $row['titulo']?>" width="295" height="162" />
                </div>
                <div class="clearer"></div>
            </div>         
            <div class="redmas">
                <a href="noticias.php?id=<?php echo $row['id']?>" class="leermas">Seguir leyendo</a>              
            </div>                         
        </li>
        <?php
        }
    }
    
    public function listDefouldOne() {
        $query = new Consulta('SELECT * FROM noticias ORDER BY id DESC LIMIT 1');
        while ($row= $query->VerRegistro()){
        ?>
            <div class="cabecera_noticia">
                <div class="titulo_noticia"><h4><?php echo $row['titulo']?></h4></div>
                <div class="comp_facebook">
                   <a href="javascript:void(0)" onclick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/noticias.php?id=<?php echo $row['id'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" style="float:left;" title="Compartir en Facebook">
                        <img src="aplication/webroot/imgs/compartir-facebook.gif" />
                    </a>
                </div>
                <div class="fecha_noticia"><?php echo fecha_long2($row['fecha'])?></div>
            </div>
            <div class="conten_detalle_foto">
                <div class="detalle">
                    <p>
                        <img src="aplication/webroot/imgs/noticias/<?php echo $row['imagen']?>" width="355" height="260" />
                    </p>
                    <?php echo $row['descripcion']?>                                      
                </div>
            </div>          
        <?php
        }
    }
    
    public function listDefouldOneId($id) {
        $query = new Consulta('SELECT * FROM noticias WHERE id = ' . $id . ' ORDER BY id DESC LIMIT 1');
        while ($row= $query->VerRegistro()){
        ?>
            <div class="cabecera_noticia">
                <div class="titulo_noticia"><h4><?php echo $row['titulo']?></h4></div>
                <div class="comp_facebook">
                   
    <a href="javascript:void(0)" onclick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/noticias.php?id=<?php echo $row['id'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" style="float:left;" title="Compartir en Facebook">
                        <img src="aplication/webroot/imgs/compartir-facebook.gif" />
                    </a>
                    
                    
                    
                </div>             
                <div class="fecha_noticia"><?php echo fecha_long2($row['fecha'])?></div>
            </div>
            <div class="conten_detalle_foto">
                <div class="detalle">
                    <p>
                        <img src="aplication/webroot/imgs/noticias/<?php echo $row['imagen']?>" width="355" height="260" />
                    </p>
                    <?php echo $row['descripcion']?>                                      
                </div>
            </div>          
        <?php
        }
    }    




 public function listfacebookfk($id) {
        $query = new Consulta('SELECT * FROM noticias WHERE id = ' . $id . ' ORDER BY id DESC LIMIT 1');
        while ($row= $query->VerRegistro()){
       ?>
       
<meta property="og:title" content="<?php echo $row['titulo']; ?>"/>
<meta property="og:image" content="<?php echo "http://coipri.pe/aplication/webroot/imgs/noticias/".$row['imagen'].""; ?>" />
<meta property="og:description" content="<?php echo $row['introduccion']; ?>"/>
       

	   
        
        
            
                      
        <?php
        }
    }    














    public function listNoticias() {
        $sql = 'SELECT * FROM noticias ORDER BY id DESC';
        $query = new Consulta($sql);
        while ($row = $query->VerRegistro()) {
            ?>
            <a id="<?php echo $row['id']?>" class="nos">
                <div class="btn_noticia_conten">
                    <?php echo $row['titulo']?>
                    <div>
                        <?php echo fecha_long2($row['fecha'])?>
                    </div>
                </div>  
            </a>         
            <?php
            }
    }  
    
    public function listNoticiasId($id) {
        $sql = 'SELECT * FROM noticias WHERE id='. $id;
        $query = new Consulta($sql);
        while ($row = $query->VerRegistro()) {
            ?>
            <div class="cabecera_noticia">
                <div class="titulo_noticia"><h4><?php echo $row['titulo']?></h4></div>
                <div class="comp_facebook">
                    <a href="javascript:void(0)" onclick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/noticias.php?id=<?php echo $row['id'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" style="float:left;" title="Compartir en Facebook">
                        <img src="aplication/webroot/imgs/compartir-facebook.gif" />
                    </a>
                </div>                  
                <div class="fecha_noticia"><?php echo fecha_long2($row['fecha'])?></div>
            </div>
            <div class="conten_detalle_foto">
                <div class="detalle">
                    <p>
                        <img src="aplication/webroot/imgs/noticias/<?php echo $row['imagen']?>" width="355" height="260" />
                    </p>
                    <?php echo $row['descripcion']?>                                      
                </div>
            </div>      
            <?php
            }

   }
    
}