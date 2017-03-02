<?php include("inc.aplication_top.php");

include(_includes_."admin/inc.header.php"); 
?>
<body>
	<div id="dw-window"> 
    	<div id="dw-admin">
            <div id="dw-menu">
               <!-- Menu -->
               <?php include(_includes_."admin/inc.top.php"); ?>
            </div>
            <div id="dw-page">
                <div id="dw-cuerpo">
                    <h1>Administrador 
                        <span class="operations">
                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <em>Listar Productos</em>
                                <span></span>
                            </a>
                            <?php
                                $Productos = new Productos($msgbox);
				switch($_GET['action']){
					case 'newImagenes':
                                            ?>
                                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=newImagenes">
                                                <em>Listar Imagenes</em>
                                                <span></span>
                                            </a>
                                            <?php
					break;
					case 'addImagenes':
						
					break;
					case 'editImagenes':
						
					break;
                                        case 'updateImagenes':
						
					break;
                                        case 'deleteImagenes':							
						
					break;
                                        case 'listImagenes':
                                            ?>
                                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=newImagenes&id_producto=<?php echo $_GET['id_producto'] ?>">
                                                <em>Nueva Imagen</em>
                                                <span></span>
                                            </a>
                                            <?php
					break;
                                        case 'list':							
                                            ?>
                                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=new">
                                                <em>Nuevo Producto</em>
                                                <span></span>
                                            </a>
                                            <?php
					break;
                                        default:							
                                            ?>
                                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=new">
                                                <em>Nuevo Producto</em>
                                                <span></span>
                                            </a>
                                            <?php
					break;
				}	
                            ?>                            
                        </span>
                    </h1>
                    <?php echo $msgbox->getMsgbox(); ?>
                	<?php
				$Productos = new Productos($msgbox);
				switch($_GET['action']){
					case 'newImagenes':
						$Productos->newImagenes($idioma);
					break;
					case 'addImagenes':
						$Productos->addImagenes();
					break;
					case 'editImagenes':
						$Productos->editImagenes();
					break;
                                        case 'updateImagenes':
						$Productos->updateImagenes($id);
						$Productos->listImagenes();
					break;
                                        case 'deleteImagenes':							
						$Productos->deleteImagenes();
						$Productos->listImagenes();
					break;
                                        case 'listImagenes':
						$Productos->listImagenes();
					break;
                                    
					case 'new':
						$Productos->newProductos($idioma);
					break;
					case 'add':
						$Productos->addProductos();
						$Productos->listProductos();
					break;
					case 'edit':
						$Productos->editProductos($idioma);
					break;
					case 'update':
						$Productos->updateProductos($id);
						$Productos->listProductos();
					break;
					case 'delete':							
						$Productos->deleteProductos();
						$Productos->listProductos();
					break;
					case 'list':							
						$Productos->listProductos();
					break;						
					default:							
						$Productos->listProductos();
					break;					
				}	?>
                </div>
            </div> 
			                       
        </div>
    </div>

</body>
</html>
<?php include("inc.aplication_bottom.php"); ?>