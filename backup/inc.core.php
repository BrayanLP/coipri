<?php 	
include("aplication/inc.config.php");
//		include($_SERVER['DOCUMENT_ROOT']."/inc.config.php");
	
	define("_ruta_",$_config["server"]["host"]);
	define("_includes_",$_config["server"]["host"]."aplication/includes/");
	
	define("_imgs_",$_config["server"]["url"]."aplication/webroot/imgs/");
	define("_catalogo_",$_config["server"]["url"]."aplication/webroot/imgs/catalogo/");
	define("_icons_",_imgs_."icons/");
	define("_admin_",_imgs_."admin/");
	define("_flash_",$_config["server"]["url"]."aplication/webroot/flash/");
	
		
	define("_model_",$_config["server"]["host"]."aplication/model/");
	define("_view_",$_config["server"]["host"]."aplication/view/");
	define("_util_",$_config["server"]["host"]."aplication/utilities/");
	
	
	define("_img_file_","aplication/utilities/img.php");
	define("_imagen_","aplication/utilities/imagen.php");
	define("_imgs_prod_","aplication/webroot/imgs/catalogo/");
	define("_language_",$_config["server"]["host"]."aplication/language/");
        
		
?>