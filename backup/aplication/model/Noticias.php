<?php

class Noticias{

    private $_msgbox;

    public function __construct($msg='') {
        $this->_msgbox = $msg;
    }

    public function listNoticias() {
        $sql = 'SELECT * FROM noticias ORDER BY id DESC';
        $query = new Consulta($sql);
        $format = new Fecha();

        ?>	 
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Noticias</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id_categoria']."|cat"; ?>">
                            <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['titulo'] ?></div>
                            <div class="options">
                                   <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                                    <a title="Editar" class="tooltip" href="noticias.php?id=<?php echo $row['id'] ?>&action=edit&id=<?php echo $row['id'] ?>"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                                    <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento('noticias.php','<?php echo $row['id'] ?>','delete&id=<?php echo $row['id'] ?>')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                            </div>
                      </li>
                <?php
                        $y++;
                }
                ?>
              </ul>  
                <?php
    }

    public function newNoticias() {
        $query = new Consulta('SELECT * FROM noticias');
        Form::getForm($query, 'new', 'noticias.php');
    }

    public function addNoticias() {  
        $destino = '../aplication/webroot/imgs/noticias/';
        define("NAMETHUMB", "/tmp/thumbtemp");

        if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") {

            $imagen = time() . $_FILES['imagen']['name']; // time()
            $size = $_FILES['imagen']['size'];
            $tarchivo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(355, 260, $imagen1);
            
            $obj1 = new Upload();
            $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);            
            
                $query = new Consulta('
                    INSERT INTO noticias ( titulo,fecha, imagen, introduccion, descripcion )
                VALUES (
                "' . addslashes($_POST['titulo']) . '","' . $_POST['fecha']. '","' . $imagen . '","' . addslashes($_POST['introduccion']) . '","' . addslashes($_POST['descripcion']) . '"
                )');                     
            
        } else{
            $query = new Consulta('
                INSERT INTO noticias ( titulo, fecha, introduccion, descripcion )
            VALUES (
            "' . addslashes($_POST['titulo']) . '","' . $_POST['fecha'] . '","' . addslashes($_POST['introduccion']) . '","' . addslashes($_POST['descripcion']) . '"
            )');                

        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('noticias.php');      
    }

    public function editNoticias() {
        $query = new Consulta('SELECT * FROM noticias WHERE id = "' . $_GET['id'] . '" ');
        Form::getForm($query, 'edit', 'noticias.php','','','noticias','img','355','260');
    }

    public function updateNoticias() {
        $destino = '../aplication/webroot/imgs/noticias/';
        define("NAMETHUMB", "/tmp/thumbtemp");

        if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") {

            $imagen = time() . $_FILES['imagen']['name']; // time()
            $size = $_FILES['imagen']['size'];
            $tarchivo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);

            $obj1 = new Upload();
            $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size1);
            
                $query = new Consulta('
                    UPDATE noticias SET titulo = "' . addslashes($_POST['titulo']) . '", 
                                        fecha = "' . $_POST['fecha'] . '",
                                        imagen= "' . $imagen . '", 
                                        introduccion = "' . addslashes($_POST['introduccion']) . '",
                                        descripcion = "' . addslashes($_POST['descripcion']) . '"
                    WHERE id = "' . $_GET['id'] . '"
                               ');                  

            
        } else {

            $query = new Consulta('
                    UPDATE noticias SET titulo = "' . addslashes($_POST['titulo']) . '",
                                        fecha = "' . $_POST['fecha'] . '",
                                        introduccion = "' . addslashes($_POST['introduccion']) . '",
                                        descripcion = "' . addslashes($_POST['descripcion']) . '"
                    WHERE id = "' . $_GET['id'] . '"
                               ');                
            
        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('noticias.php');
    }

    public function deleteNoticias() {
        $query = new Consulta('DELETE FROM noticias WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('noticias.php');
    }

}