<?php
include "conectardb.php";
?>
<?php
		$xsql = "SELECT MAX(id) AS id from evalua_matematicas0;";
		
        $cars = array();
        $j = 0;		
	
		$estructura = array();
		$resultado = mysqli_query( $GLOBALS['dbdata'], $xsql );
		while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
			$estructura[] = $row;
		}
		mysqli_free_result($resultado);

		$id = 0;
		foreach( $estructura as $fila ) {
			$id = $fila["id"];
		}


        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $tx_imagen = $this->input->post('tx_imagen');
        $fe_inicio = $this->input->post('fe_inicio');
        $fe_final = $this->input->post('fe_final');
        $ca_puntaje = $this->input->post('ca_puntaje');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'fe_inicio' => $fe_inicio,
            'fe_final' => $fe_final,
            'tx_imagen' => $tx_imagen,
            'ca_puntaje' => $ca_puntaje
        );
        $str = $this->db->insert_string('evalua_matematicas0', $data);
        $query = $this->db->query($str);
		
		

    
        $datos_j = '{ "data": ';
        $datos_j = $datos_j . json_encode($cars);
        $datos_j = $datos_j . ' } ';
		
		echo $datos_j;






	echo "ok";

?>
