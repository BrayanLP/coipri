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
                    <h1>Administrador de Fichas de Incripción
                        <span class="operations">
                            <a href="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <em>Listar</em>
                                <span></span>
                            </a>                            
                            <?php
                                $Inscritos = new Inscritos($msgbox);
                                switch($_GET['action']){
                                        case 'list':
                             ?>
                                        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idTar=<?php echo $_GET['idTar']?>&action=listFich">
                                        <em>Listar Fichas</em>
                                        <span></span>                       
                            <?php
                                       break;
                                       case 'listFich':
                             ?>                                       
                                        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idTar=<?php echo $_GET['idTar'] ?>&action=newFich">
                                        <em>Nueva Ficha</em>
                                        <span></span>                       
                            <?php
                            		break;  
					case 'editFich':
                            ?>
                                        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idTar=<?php echo $_GET['idTar']?>&action=listFich">
                                        <em>Listar Fichas</em>
                                        <span></span>                                          
			    <?php                          
                                        break;  
					case 'edit':
                            ?>
                                        <a href="<?php echo $_SERVER['PHP_SELF'] ?>?idFich=<?php echo $_GET['idFich']?>&idTar=<?php echo $_GET['idTar']?>&action=list">
                                        <em>Listar Inscrito(s)</em>
                                        <span></span>                                          
                            <?php
					break;                                    
                                        default:							
                                                
                                        break;
                                }
                            ?>
                            
                             <!--<a href="<?php /*echo $_SERVER['PHP_SELF']*/ ?>?action=new">
                                <em>Nueva Incripción</em>
                                <span></span>-->
                            </a>
                        </span>
                    </h1>
                    <?php echo $msgbox->getMsgbox(); ?>
                	<?php
				$Inscritos = new Inscritos($msgbox);
				switch($_GET['action']){
                                    
                                        /*-----------Edit Fechas------------*/
                                        case 'editFecha':
						$Inscritos->editFechas();
					break;
                                        case 'updateFecha':
						$Inscritos->updateFechas();
					break;                                    
                                        /*-----------------------------------------*/
    					case 'newTar':
						$Inscritos->newTarifas();
					break;
					case 'addTar':
						$Inscritos->addTarifas();
						$Inscritos->listTarifas();
					break;
					case 'editTar':
						$Inscritos->editTarifas();
					break;
					case 'updateTar':
						$Inscritos->updateTarifas();
						$Inscritos->listTarifas();
					break;
					case 'deleteTar':							
						$Inscritos->deleteTarifas();
						$Inscritos->listTarifas();
					break;
					case 'listTar':							
						$Inscritos->listTarifas();
					break;	
                                        /*------------------------------------------*/
					case 'newFich':
						$Inscritos->newFichas();
					break;
					case 'addFich':
						$Inscritos->addFichas();
						$Inscritos->listFichas();
					break;
					case 'editFich':
						$Inscritos->editFichas();
					break;
					case 'updateFich':
						$Inscritos->updateFichas();
						$Inscritos->listFichas();
					break;
					case 'deleteFich':							
						$Inscritos->deleteFichas();
						$Inscritos->listFichas();
					break;
					case 'listFich':							
						$Inscritos->listFichas();
					break;	           
					case 'exportexcel':							
						$Inscritos->exportExcelFichas();
					break;
                                        /*------------------------------------------*/
					case 'new':
						$Inscritos->newInscritos();
					break;
					case 'add':
						$Inscritos->addInscritos();
						$Inscritos->listInscritos();
					break;
					case 'edit':
						$Inscritos->editInscritos();
					break;
					case 'update':
						$Inscritos->updateInscritos();
						$Inscritos->listInscritos();
					break;
					case 'delete':							
						$Inscritos->deleteInscritos();
						$Inscritos->listInscritos();
					break;
					case 'list':							
						$Inscritos->listInscritos();
					break;
                                        /*----------Adicionales--------------*/
                                        case 'editAdic':
						$Inscritos->editAdicionales();
					break;
					case 'updateAdic':
						$Inscritos->updateAdicionales();
						$Inscritos->listAdicionales();
					break;
					case 'deleteAdic':							
						$Inscritos->deleteAdicionales();
						$Inscritos->listAdicionales();
					break;
					case 'listAdic':	
                                                $Inscritos->listTarifas();
						$Inscritos->listAdicionales();
					break;                                    
					default:			
                                                $Inscritos->listRangoFechas();
                                        ?>
                                            <br/>
                                            <h1>Adicionales</h1>                
                                        <?php
                                                $Inscritos->listAdicionales();
					break;					
				}	?>
                </div>
            </div> 
			                       
        </div>
    </div>

</body>
</html>
<?php include("inc.aplication_bottom.php"); ?>