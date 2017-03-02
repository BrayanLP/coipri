<?php 
class Upload{

	public function upload_imagen($nombre, $temp, $destino, $tarchivo, $tamano ){
	
		if(!( (strpos($tarchivo, "jpeg"))  ||  (strpos($tarchivo, "jpg")) ||  (strpos($tarchivo, "png")) ||  (strpos($tarchivo, "gif")) ||  (strpos($tarchivo, "wbmp")) )){
			
			echo "<div id=error>La extensión no es valida ( Solo se permiten archivos .jpg, .png, .gif, .wbmp  )</div>"; 
			
		}elseif($tamano > 250000000000){
				echo "<div id=error>La extensión o el tamaño ".$tamano * 1024 ." del archivo no valida.</div>"; 
		}else{
			if(move_uploaded_file($temp,$destino.$nombre)){	
				return true;												
			}else{
				return false;
			}
		}			
	}
	
	public function upload_file($nombre, $temp, $destino, $tarchivo, $tamano){
		$extencion = ext($nombre);
		if($tamano > 250000000000){
				echo "<div id=error>La extensión o el tamaño ".$tamano * 1024 ." del archivo no valida.</div>"; 
		}else if(($extencion == "mp3") || ( $extencion == "pdf") || ($extencion == "doc") || ($extencion == "docx") ||  ($extencion == "jpeg") ||  ($extencion == "jpg") || ($extencion == "xlsx") || ($extencion == "xls")){
				
			if(move_uploaded_file($temp,$destino.$nombre)){	
				return true;	
															
			}else{
				return false;
				
			}	
					
		}
		
		else{
			echo "<div id=error>La extensión no es valida ( Solo se permiten archivos PDF, Word, JPG   )</div>"; 
		}			
	}	
        
        
	public function upload_mp3($nombre, $temp, $destino, $tarchivo, $tamano){
		$extencion = ext($nombre);
		if($tamano > 250000000000){
				echo "<div id=error>La extensión o el tamaño ".$tamano * 1024 ." del archivo no valida.</div>"; 
		}else if(($extencion == "mp3")){
				
			if(move_uploaded_file($temp,$destino.$nombre)){	
				return true;	
															
			}else{
				return false;
				
			}	
					
		}
		
		else{
			echo "<div id=error>La extensión no es valida ( Solo se permiten archivos PDF, Word, JPG   )</div>"; 
		}			
	}        
        
}
?>