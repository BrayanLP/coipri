<?php

class Encuestas {

    public function __construct() {
        
    }

    public function listEncuestas() {

        $cons_cant = new Consulta("SELECT COUNT(*) AS nroenc FROM encuestas");
        $cant = $cons_cant->VerRegistro();

            $cons_enc_act = new Consulta("SELECT * FROM encuestas");
            $datos = $cons_enc_act->VerRegistro();
            $id = $datos['id'];
            $preg = $datos['pregunta'];
            $opc = $datos['opciones'];
            echo "<div class=\"encuesta\">	
                <p class=\"preg\"><strong>" . $preg . "</strong></p>";
                echo "<div id=\"results\" class=\"encuesta\" style =\"display: none\">";
                $this->insertResultadosEncuestas1($id);
                echo "</div>";                    
            echo "<div id=\"resultados\"> \n";
            echo "
                
                <form id=\"enques\" onsubmit=\"cargarResultados(this); return false\" name=\"frmencuesta\" action=\"\">
                <input type=\"hidden\" name=\"cod\" value=\"" . $id . "\" /> \n";
            $opciones = explode(",", $opc);
            $i = 0;
            $tot_elems = count($opciones);
            while ($i <= $tot_elems - 1) {
                $j = $i + 1;
                echo "	
                        <p>
                            <input type=\"radio\" name=\"opcion\" value=\"" . $j . "\" id=\"opcion" . $j . "\" /> " . trim($opciones[$i]) . "
                        </p> \n";
                $i++;
            }
            echo "	
                <input type=\"hidden\" name=\"nroopciones\" value=\"" . $i . "\" />";
            echo "	
                <p style=\"text-align:center;\">
                        <input class=\"boton\" type=\"submit\" value=\"Votar\" />
                        <input class=\"boton\" type=\"button\" onclick=\"Resultados()\"  value=\"Resultados\" />
                </p>                
                </form>
                </div> </div>\n";
    }

    public function insertResultadosEncuestas($voto) {
        $id = $_POST['id'];
        $vot = $_POST['alternativa'];
        $consulta = new Consulta("SELECT * FROM encuestas WHERE id=$id");
        $datos = $consulta->VerRegistro();
        $opc = $datos['opciones'];
        $resp = $datos['respuestas'];
        $opciones = explode(",", $opc);
        $rptas = explode(",", $resp);
        $i = 0;
        $respuesta_nueva = "";
        $alternativas = "";
        $coma = "";
        $tot_elems = count($rptas);

        while ($i <= $tot_elems - 1) {
            $j = $i + 1;
            if ($j == $vot) {
                $valor_respuesta = $rptas[$i] + 1;
            } else {
                $valor_respuesta = $rptas[$i];
            }
            $respuesta_nueva = $respuesta_nueva . $coma . $valor_respuesta;
            $alternativas = $alternativas . $rptas[$i];
            $coma = ",";
            $i++;
        }

        $updenc = "UPDATE encuestas SET respuestas='$respuesta_nueva', nrovotos=nrovotos+1 WHERE id=$id";
        $updencresult = new Consulta($updenc);

        $consulta2 = new Consulta("SELECT * FROM encuestas WHERE id=$id");
        $listado = $consulta2->VerRegistro();
        $preg = $listado['pregunta'];
        $opc = $listado['opciones'];
        $resp = $listado['respuestas'];
        $nrovot = $listado['nrovotos'];
        $opciones = explode(",", $opc);
        $rptas = explode(",", $resp);
		$maximo = max($rptas);
        $i = 0;
        $tot_elems = count($opciones);

        while ($i <= $tot_elems - 1) {
            $ResulOpc = $rptas[$i] - 1;
			$cantidad = $rptas[$i] - 1;
            $ResulPorc = ( $ResulOpc * 100 ) / $nrovot;
            echo "<p>";
			echo "<strong>" . round($ResulPorc, 2) . "%</strong>&nbsp;".$opciones[$i]."&nbsp;(".$cantidad." votos)";
			?>
            <span class="results">
                <span class="bar" style="width: <?php echo round($ResulPorc, 2);?>%;<?php if($cantidad == ($maximo -1)){echo "background-color: #F9C813;";} ?>"></span>
			</span>
			<?php
            echo "</p> \n";
            $i++;
        }
        echo "<p style=\"text-align:center;\">Total de votos: " . $nrovot . "</p> \n";
    }
    
    public function insertResultadosEncuestas1($id) {
        $consulta = new Consulta("SELECT * FROM encuestas WHERE id = $id");
        $datos = $consulta->VerRegistro();
        $opc = $datos['opciones'];
        $resp = $datos['respuestas'];
        $opciones = explode(",", $opc);
        $rptas = explode(",", $resp);
        $i = 0;
        $respuesta_nueva = "";
        $alternativas = "";
        $coma = "";
        $tot_elems = count($rptas);

        while ($i <= $tot_elems - 1) {
            $j = $i + 1;
            if ($j == $vot) {
                $valor_respuesta = $rptas[$i] + 1;
            } else {
                $valor_respuesta = $rptas[$i];
            }
            $respuesta_nueva = $respuesta_nueva . $coma . $valor_respuesta;
            $alternativas = $alternativas . $rptas[$i];
            $coma = ",";
            $i++;
        }

        $updenc = "UPDATE encuestas SET respuestas='$respuesta_nueva', nrovotos=nrovotos+1 WHERE id=$id";
        $updencresult = new Consulta($updenc);

        $consulta2 = new Consulta("SELECT * FROM encuestas WHERE id=$id");
        $listado = $consulta2->VerRegistro();
        $preg = $listado['pregunta'];
        $opc = $listado['opciones'];
        $resp = $listado['respuestas'];
        $nrovot = $listado['nrovotos'];
        $opciones = explode(",", $opc);
        $rptas = explode(",", $resp);
		$maximo = max($rptas);
        $i = 0;
        $tot_elems = count($opciones);

        while ($i <= $tot_elems - 1) {
            $ResulOpc = $rptas[$i] - 1;
			$cantidad = $rptas[$i] - 1;
            $ResulPorc = ( $ResulOpc * 100 ) / $nrovot;
            echo "<p>";
			echo "<strong>" . round($ResulPorc, 2) . "%</strong>&nbsp;".$opciones[$i]."&nbsp;(".$cantidad." votos)";
			?>
            <span class="results">
                <span class="bar" style="width: <?php echo round($ResulPorc, 2);?>%;<?php if($cantidad == ($maximo -1)){echo "background-color: #F9C813;";} ?>"></span>
			</span>
			<?php
            echo "</p> \n";
            $i++;
        }
        echo "<p style=\"text-align:center;\">Total de votos: " . $nrovot . "</p> \n";
    }

}