<?php
    class CrearSeguimiento {
        public function llenarDatosCliente($cliente_id,$conn){
            $sql = $conn->query("CALL ListDatosSeguimiento('$cliente_id')");
            WHILE ($row = $sql->fetch_assoc()){
                $output = '';
                $output.= '<div class="form-group">';
                $output.= '<label>Cliente-Contacto</label>';
                $output.= '<input class="input" name="cli_cont" id="cli_cont" value="'.$row['cli_cont'].'">';
                $output.= '</div>';
                $output.= '<div class="form-group">';
                $output.= '<label>Correo de Cliente</label>';
                $output.= '<input class="input" type="email" name="cliente_mail" id="cliente_email" value="'.$row['cli_mail'].'">';
                $output.= '</div>';
                $output.= '<div class="form-group">';
                $output.= '<label>Tipo de Cliente</label>';
                $output.= '<input class="input" type="text" name="cli_type" id="cli_type" value="'.$row['cli_type'].'">';
                $output.= '</div>';
                return $output;
            }
        }
    }
?>