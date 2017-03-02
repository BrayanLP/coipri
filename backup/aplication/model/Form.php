<?php 

class Form{
	
	private $_sql;
	private $_tabla;
	private $_tipo; 
	
	
	public function getForm($query, $opcion, $url='', $array_embed='', $array_relation='',$archivo='', $file='', $w='', $h=''){
		$row = mysql_fetch_row($query->Consulta_ID);
		$table = $query->nombretabla();
		if($opcion=="edit"){ 
			$action="update"; $input="ACTUALIZAR"; $titulo="Editar Registro"; 
                        
		}else if($opcion=="editImagenes"){ 
			$action="updateImagenes"; $input="ACTUALIZAR"; $titulo="Editar Registro"; 
                        
		}else if($opcion=="editTar"){ 
			$action="updateTar"; $input="ACTUALIZAR"; $titulo="Editar Registro";                   
                        
                }else if($opcion=="editAdic"){ 
			$action="updateAdic"; $input="ACTUALIZAR";  $titulo="Editar Registro";
     
		}else if($opcion=="editFich"){ 
			$action="updateFich"; $input="ACTUALIZAR";  $titulo="Editar Registro";
                        
		}else if($opcion=="editFecha"){ 
			$action="updateFecha"; $input="ACTUALIZAR";  $titulo="Editar Registro";                        
                                            
                        
		}else if($opcion=="new"){ 
			$action="add"; $input="GUARDAR";  $titulo="Nuevo Registro";
                        
		}else if($opcion=="newImagenes"){ 
			$action="addCat"; $input="GUARDAR";  $titulo="Nuevo Registro";
                        
		}else if($opcion=="newTar"){ 
			$action="addTar"; $input="GUARDAR";  $titulo="Nuevo Registro";
                        
		}else if($opcion=="newFich"){ 
			$action="addFich"; $input="GUARDAR";  $titulo="Nuevo Registro";                        
                        
		}
                ?>
		<script type="text/javascript"> <?php
		if($opcion=="edit"){ ?>
			function load_imgs(){<?php
				for ($i = 1; $i < $query->NumeroCampos(); $i++){							
					if($query->tamaniocampo($i)==71){ ?> document.<?php echo $table.".".$query->nombrecampo($i)?>.value="<?php echo $row[$i]?>"; <?php }
				}	?>			   				
			} <?php
		} ?>
			function valida_<?php echo $table?>(){ <?php
				for ($i = 1; $i < $query->NumeroCampos(); $i++){
					$name  = $query->nombrecampo($i);
					$flags = $query->flagscampo($i);
					$type  = $query->tipocampo($i);
					$len   = $query->tamaniocampo($i);		
					$validar = explode(' ', $flags);
					
					//echo "validar= '".$validar[0]."'";
					if($len==71 || $len==72){ $enctype="enctype=\"multipart/form-data\""; }
					if($validar[0] == "not_null"){  
						if($opcion=="edit" && $len==71 || $opcion=="editImagenes"  || $len==72 || $name == "descripcion" || $name == "imagen" || $name == "introduccion" || $name == "voucher"){
							//dejar pasar
						}else{
                                                     ?>					
                                                    if(document.<?php echo $table.".".$name?>.value==""){
                                                            alert('ERROR: El campo <?php echo str_replace("_"," ",str_replace('id_',' ',$name))?> debe llenarse');
                                                            document.<?php echo $table.".".$name?>.focus(); 
                                                            return false;
                                                    }						
                                                    <?php 
						}						
					}				
				} ?>
				document.<?php echo $table?>.action="<?php echo $url?>?action=<?php echo $action?>&id=<?php echo $row[0]?><?php if(!empty($_GET['idTar'])){echo '&idTar='.$_GET['idTar'];}?><?php if(!empty($_GET['idFich'])){echo '&idFich='.$_GET['idFich'];}?><?php if(!empty($_GET['idAdic'])){echo '&idAdic='.$_GET['idAdic'];}?>";
				document.<?php echo $table?>.submit();
			}			
		</script>  <?php			
		echo "
			<fieldset id='form'>
			<legend> ".$titulo."</legend>			
			<form name='".$table."' method='post' action='' ".$enctype." > \n 
				<div class='button-actions'>
					<input type='reset' name='cancelar' value='CANCELAR' class='button' >  
					<input type='button' name='actualizar' value='".$input."' onclick='return valida_".$table."()' class='button'><br clear='all' />\n
                                </div>
				<ul>";
				
		for ($i = 1; $i < $query->NumeroCampos(); $i++){
			$name = $query->nombrecampo($i);
			$type = $query->tipocampo($i);
			$len  = $query->tamaniocampo($i);
			if($opcion == "edit" || $opcion == "editFecha"  || $opcion == "editAdic" || $opcion == "editTar" || $opcion == "editFich" ){ $r=$row[$i]; }else{ $r=""; }
			echo " 
					<li><label> ".ucwords(str_replace("_"," ",str_replace("id_"," ",$query->nombrecampo($i)))).": </label>";
			if(is_array($array_embed) && array_key_exists($i, $array_embed)){
				echo $array_embed[$i];			
			}else{	
				switch($type){					
					case 'int':
						if($len == 1){							
							echo "<select name='".$name."'><option value='1' ";
                                                                    if($r == 1){echo "selected ='selected' ";}echo ">S/.</option>";
                                                                    echo"<option value='2'";
                                                                    if($r == 2){echo "selected ='selected' ";}echo">US$</option>
                                                             </select>";    
						}elseif($len == 2){
							echo "<select name='".$name."'><option value='2' ";
                                                                    if($r == 1){echo "selected ='selected' ";}echo ">S&iacute;</option>";
                                                                    echo"<option value='2'";
                                                                    if($r == 2){echo "selected ='selected' ";}echo">No</option>
                                                             </select>";                                                                     
                                                }elseif($len == 4){
                                                        echo " <input type='checkbox' name='".$name."' value=1"; 
									if($r==1 && $r!=0){ echo " checked='checked'"; } echo"> &nbsp; &nbsp; ";                                                                        
                                                }else{
                                                    echo "<input type='text' name='".$name."' dir='rtl'  value='".$r."' class='num' >";/*onKeyPress='return validnum(event)'*/
                                                }
						
					break;
					case 'real':
						echo "<input type='text' name='".$name."' value='".$r."'  class='num solo_numero'  dir='rtl'>";
					break;
					case 'string':
						if($len==71){
                                                    echo "<input type='file' name='".$name."' value='".$r."'  class='text ui-widget-content ui-corner-all'>&nbsp;";
                                                    if(!empty($r)){
                                                         if($file == "img_fix"){
                                                             echo '<div align="center"><br><img src="../aplication/webroot/imgs/'.$archivo.'/'.$r.'"  style="max-height: 150px;"/></div>';
                                                         }else{
                                                            echo "<div class='imgs' align='center'><br><img src='../aplication/utilities/".$file.".php?archivo=".$archivo."&imagen=".$r."&w=".$w."&h=".$h."' />";
                                                            if($name == "voucher"){echo "<div class='".$name."'><a href='../aplication/webroot/imgs/".$archivo."/force.php?archivo=".$r."' title='Descargar' class='tooltip'><img src='". _admin_ ."icon_download.png'/></a></div>";};
                                                            echo "</div>";
                                                         }
                                                         
                                                    }
						}elseif($len==72){
                                                    echo "<input type='file' name='".$name."' value='".$r."'  class='text ui-widget-content ui-corner-all'>&nbsp;";   
						}else{
                                                    echo "<input type='text' name='".$name."' value='".$r."' class='text ui-widget-content ui-corner-all' size='59'  maxlength=".$len." >";	
                                                }
						
					break;
					case 'blob':
						echo "<textarea name='".$name."' value='' class='textarea tinymce'>".$r."</textarea> ";
					break;
					case 'date' || 'datetime':
						/*if(!empty($r)){ $r=formato_slash2("-",$r);}else{ $r = date("Y/m/d");}*/
						echo '<input type="text" name="'.$name.'" id="'.$name.'" value="'.$r.'" 
						 size="12" class="date">';
					break;									
				}		
			}		
			echo "</li>";
		}
		
		echo " 
					</ul>
				</form>
			</fieldset>\n";							
	}
	
	static public function select($items,$nombre,$key,$value,$id=0){
		
		$total_items = count($items);
		$seleccione  = str_replace("_"," ",$nombre);
		$r = "<select name='id_$nombre' id='id_$nombre'>
				";
				$r.= "<option value=' '> Seleccione $seleccione</option>
				";	
			for($i=0; $i < $total_items; $i++){ 
				$r.= "<option value='".$items[$i][$key]."' ";
				if($items[$i][$key] == $id){ $r.= "selected='selected'";}
				$r.= "> ".$items[$i][$value]." </option>
				"; 
			}
		$r.="</select>";
		return $r;
	}
	
	
	static public function selectMultiple($items,$nombre,$key,$value,$ids){
	 
		$total_items = count($items);
		$r = "<select name='id_".$nombre."[]' multiple size='7'>";
		$r.= "<optgroup label='Seleccione $nombre'> Seleccione $nombre</optgroup>";	
			for($i=0; $i < $total_items; $i++){ 
				$r.= "
				<option value='".$items[$i][$key]."'";
				if(is_array($ids) && in_multi_array($items[$i][$key],$ids)){ 
					$r.= " selected "; 
				} 
				$r.="> ".$items[$i][$value]." </option>"; 
			}
		$r.="</select>";
		return $r;
	}
	
	static public function selectOpcionParaAccionMasiva($array_opciones){
		$r = "Para los elementos seleccionados: ";
		$r .= "<select name='opcion' id='opcion'>
		";
		$r.= "<option value=''> Seleccione Accion </option>
		";	
		$total_opciones = count($array_opciones);
		if(is_array($array_opciones) && count($total_opciones) > 0){
			foreach($array_opciones as $key => $value){ 
				$r.= "<option value='".$value."'> ".$key." </option>
				"; 
			}
		}
			
		$r.="</select>";
		return $r;
		
	}
	
	
	
}

?>