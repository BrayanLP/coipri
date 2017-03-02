<?php
class Productos{
	
    private $_msgbox;
    private $_id;
    private $_id_producto;

    public function __construct($msg='') {
        $this->_msgbox = $msg;
        $this->_id = $_GET['id'];
        $this->_id_producto = $_GET['id_producto'];
    }

    public function listProductos() {
        $sql = 'SELECT * FROM productos ORDER BY id ASC';
        $query = new Consulta($sql);
        $format = new Fecha();

        ?>	 
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Productos</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id_categoria']."|cat"; ?>">
                            <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['nombre'] ?></div>
                            <div class="options">
                                   <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                                    <a title="Editar" class="tooltip" href="productos.php?action=edit&id=<?php echo $row['id'] ?>"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                                    <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('productos.php','<?php echo $row['id_categoria'] ?>','delete&id=<?php echo $row['id'] ?>')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                                    <a title="Agregar Imágenes" class="tooltip" href="productos.php?action=listImagenes&id_producto=<?php echo $row['id'] ?>"> <img src="<?php echo _admin_ ?>imagen.png"></a>
                            </div>
                      </li>
                <?php
                        $y++;
                }
                ?>
              </ul> 
         </div>
                <?php
    }

    public function newProductos() {
        $query = new Consulta('SELECT * FROM productos');
        Form::getForm($query, 'new', 'productos.php');
    }

    public function addProductos() {  
        $destino = '../aplication/webroot/imgs/productos/';
        define("NAMETHUMB", "/tmp/thumbtemp");

        if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") {

            $imagen = time() . $_FILES['imagen']['name']; // time()
            $size = $_FILES['imagen']['size'];
            $tarchivo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);
            
            $obj1 = new Upload();
            $obj1->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);            
            
                $query = new Consulta('
                    INSERT INTO productos ( nombre, descripcion, imagen )
                VALUES (
                "' . addslashes($_POST['nombre']) . '","' . addslashes($_POST['descripcion']) . '","' . $imagen . '"
                )');                     
            
        } else{
            $query = new Consulta('
                INSERT INTO productos ( nombre, descripcion )
            VALUES (
            "' . addslashes($_POST['nombre']) . '","' . addslashes($_POST['descripcion']) . '"
            )');                

        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('productos.php');      
    }

    public function editProductos() {
        $query = new Consulta('SELECT * FROM productos WHERE id = "' . $this->_id . '" ');
        Form::getForm($query, 'edit', 'productos.php','','','productos','img','300','150');
    }

    public function updateProductos() {
        $destino = '../aplication/webroot/imgs/productos/';
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
                    UPDATE productos SET nombre = "' . addslashes($_POST['nombre']) . '", 
                                        descripcion = "' . addslashes($_POST['descripcion']) . '",
                                        imagen= "' . $imagen . '"
                                        
                               ');                  

            
        } else {

            $query = new Consulta('
                    UPDATE productos SET nombre = "' . addslashes($_POST['nombre']) . '",
                                        descripcion = "' . addslashes($_POST['descripcion']) . '"
                               ');                
            
        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('productos.php');
    }

    public function deleteProductos() {
        $query = new Consulta('DELETE FROM productos WHERE id = ' . $this->_id);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('productos.php');
    }
    /*---------------------------------------------------------------------------------------------*/
    public function listImagenes() {
        $sql = 'SELECT * FROM galerias WHERE id_producto = ' . $this->_id_producto . ' ORDER BY id ASC';
        $query = new Consulta($sql);
        $format = new Fecha();

        ?>
        <div id="content-area">
            <table cellspacing="1" cellpading="1" class="listado">
                <thead>
                    <tr class="head">
                        <th align="left">Imágenes</th>
                        <th align="center" width="100" class="titulo">Opciones</th>
                   </tr>
                </thead>
            </table>	
            <ul id="listadoul">
             <?php
                $y = 1;
                while($row = $query->VerRegistro()){?>
                     <li class="<?php echo ($y%2 == 0) ? "fila1" : "fila2"; ?>" id="list_item_<?php echo $row['id']."|cat"; ?>">
                            <div class="data"><img src="<?php echo _admin_ ?>folder.png" class="handle"/> <?php echo $row['imagen'] ?></div>
                            <div class="options">
                                   <!-- <a class="tooltip move" title="Ordenar ( Click + Arrastrar )"><img src="<?php /*echo _admin_*/ ?>move.png" class="handle"></a>&nbsp;-->
                                    <a title="Editar" class="tooltip" href="productos.php?action=edit&id=<?php echo $row['id'] ?>"><img src="<?php echo _admin_ ?>edit.png"></a>&nbsp;
                                    <a title="Eliminar"  href="#" class="tooltip" onClick="mantenimiento_cat('productos.php','<?php echo $row['id'] ?>','delete&id=<?php echo $row['id'] ?>')"><img src="<?php echo _admin_ ?>delete.png"></a>&nbsp;
                            </div>
                      </li>
                <?php
                        $y++;
                }
                ?>
              </ul>  
         </div>  
              <?php
    }

    public function newImagenes() {
        $query = new Consulta('SELECT id, imagen_thumbnail, imagen FROM galerias');
        Form::getForm($query, 'newImagenes', 'productos.php');
    }

    public function addImagenes() {  
        $destino = '../aplication/webroot/imgs/productos/';
        define("NAMETHUMB", "/tmp/thumbtemp");

        if (isset($_FILES['imagen_thumbnail']['name']) && $_FILES['imagen_thumbnail']['name'] != "") {

            $imagen1 = time() . $_FILES['imagen_thumbnail']['name']; // time()
            $size1 = $_FILES['imagen_thumbnail']['size'];
            $tarchivo1 = $_FILES['imagen_thumbnail']['type'];
            $temp1 = $_FILES['imagen_thumbnail']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);
            
            $obj1 = new Upload();
            $obj1->upload_imagen($imagen1, $temp1, $destino, $tarchivo1, $size1);            
            
                $query = new Consulta('
                    INSERT INTO galerias ( nombre, descripcion, imagen_thumbnail )
                VALUES (
                "' . addslashes($_POST['nombre']) . '","' . addslashes($_POST['descripcion']) . '","' . $imagen . '"
                )');                     
            
        } else if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") {

            $imagen = time() . $_FILES['imagen']['name']; // time()
            $size = $_FILES['imagen']['size'];
            $tarchivo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);
            
            $obj = new Upload();
            $obj->upload_imagen($imagen, $temp, $destino, $tarchivo, $size);            
            
                $query = new Consulta('
                    INSERT INTO galerias ( nombre, descripcion, imagen )
                VALUES (
                "' . addslashes($_POST['nombre']) . '","' . addslashes($_POST['descripcion']) . '","' . $imagen . '"
                )');                     
            
        }else if (isset($_FILES['imagen_thumbnail']['name']) && $_FILES['imagen_thumbnail']['name'] != "" && 
                isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != "") {

            $imagen1 = time() . $_FILES['imagen_thumbnail']['name']; // time()
            $size1 = $_FILES['imagen_thumbnail']['size'];
            $tarchivo1 = $_FILES['imagen_thumbnail']['type'];
            $temp1 = $_FILES['imagen_thumbnail']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);
            
            $obj1 = new Upload();
            $obj1->upload_imagen($imagen1, $temp1, $destino, $tarchivo1, $size1); 
            
            $imagen = time() . $_FILES['imagen_thumbnail']['name']; // time()
            $size = $_FILES['imagen_thumbnail']['size'];
            $tarchivo = $_FILES['imagen_thumbnail']['type'];
            $temp = $_FILES['imagen_thumbnail']['tmp_name'];
            //$thumbnail1 = new ThumbnailBlob(NAMETHUMB, $destino, $_FILES['imagen_slider']['name']);
            //$thumbnail1->CreateThumbnail(318, 298, $imagen1);
            
            $obj = new Upload();
            $obj->upload_imagen($imagen, $temp, $destino, $tarchivo, $size); 
            
                $query = new Consulta('
                    INSERT INTO galerias ( imagen_thumbnail, imagen )
                VALUES (
                "' . $imagen1 . '","' . $imagen . '"
                )');                     
            
        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('productos.php');      
    }

    public function editImagenes() {
        $query = new Consulta('SELECT * FROM galerias WHERE id = "' . $_GET['id'] . '" ');
        Form::getForm($query, 'edit', 'productos.php','','','productos','img','300','150');
    }

    public function updateImagenes() {
        $destino = '../aplication/webroot/imgs/productos/';
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
                    UPDATE galerias SET nombre = "' . addslashes($_POST['nombre']) . '", 
                                        descripcion = "' . addslashes($_POST['descripcion']) . '",
                                        imagen= "' . $imagen . '"
                                        
                               ');                  

            
        } else {

            $query = new Consulta('
                    UPDATE galerias SET nombre = "' . addslashes($_POST['nombre']) . '",
                                        descripcion = "' . addslashes($_POST['descripcion']) . '"
                               ');                
            
        }
        $this->_msgbox->setMsgbox('Se guardo correctamente', 2);
        location('productos.php');
    }

    public function deleteImagenes() {
        $query = new Consulta('DELETE FROM galerias WHERE id = ' . $_GET['id']);
        $this->_msgbox->setMsgbox('Se elimino correctamente', 2);
        location('productos.php');
    }

}
 ?>