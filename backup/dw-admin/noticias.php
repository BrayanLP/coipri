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
                    <h1>Administrador Noticias
                        <span class="operations">
                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <em>Listar</em>
                                <span></span>
                            </a>
                             <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=new">
                                <em>Nueva Noticia</em>
                                <span></span>
                            </a>
                        </span>
                    </h1>
                    <?php echo $msgbox->getMsgbox(); ?>
                	<?php
				$Noticias = new Noticias($msgbox);
				switch($_GET['action']){
					case 'new':
						$Noticias->newNoticias($idioma);
					break;
					case 'add':
						$Noticias->addNoticias();
						$Noticias->listNoticias();
					break;
					case 'edit':
						$Noticias->editNoticias($idioma);
					break;
					case 'update':
						$Noticias->updateNoticias($id);
						$Noticias->listNoticias();
					break;
					case 'delete':							
						$Noticias->deleteNoticias();
						$Noticias->listNoticias();
					break;
					case 'list':							
						$Noticias->listNoticias();
					break;						
					default:							
						$Noticias->listNoticias();
					break;					
				}	?>
                </div>
            </div> 
			                       
        </div>
    </div>

</body>
</html>
<?php include("inc.aplication_bottom.php"); ?>