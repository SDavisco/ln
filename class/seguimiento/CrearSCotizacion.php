<?php
    class CrearCotizacion {
        public function llenarDatosCotizacion($sc_id,$conn){
            $sql1 = $conn->query("CALL ListDatosCotizacion('$sc_id')");
            WHILE ($row = $sql1->fetch_assoc()){
                $output = '';
                $output.= '<div class="form-group">';
    			$output.= '<label>Nombre del Cliente</label>';	    
    			$output.= '<input class="input" name="cli_nomb" id="cli_nomb" value="'.$row['cli_nomb'].'">';
    		    $output.= '</div>';
    		    $output.= '<div class="form-group">';
    			$output.= '<label>Descripcion</label>';
    			$output.= '<textarea class="input" name="descripcion" id="descripcion">'.$row['descripcion'].'</textarea>';
    		    $output.= '</div>';
    		    $output.= '<div class="form-group">';
			    $output.= '<label>Fecha Limite</label>';
				$output.= '<input class="input" type="text" name="end_fecha" id="date" value="'.$row['fin_fecha'].'">';
			    $output.= '</div>';
                return $output;
            }
        }
    }
?>