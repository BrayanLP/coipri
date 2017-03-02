<?php
	//sleep(2);
	$mens="
	
Estimados Señores de Kiéreme:

El Usuario o Empresa: ".$_POST['nombre']." 
Direccion: ".$_POST['direccion']." 
Telefono: ".$_POST['telefono']."
Email 	: ".$_POST['email']."

Te envio una consulta desde tu pagina web con el siguiente mensaje :

".$_POST['message']."


Solsegur
		
	";
	
	@mail("cesarluis_2000@hotmail.com",'Consulta',$mens,"from: Web site Aditivos Especiales <ventas@kiereme.com.pe>");
	
 
?>
