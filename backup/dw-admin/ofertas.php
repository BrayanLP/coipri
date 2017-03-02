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
                                <em>Listar</em>
                                <span></span>
                            </a>
                             <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=new">
                                <em>Nuevo Producto</em>
                                <span></span>
                            </a>
                        </span>
                    </h1>
                    <?php echo $msgbox->getMsgbox(); ?>
                	<?php
				$Productos = new Productos($msgbox);
				switch($_GET['action']){
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