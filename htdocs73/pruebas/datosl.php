<?php
include "conectardb.php";
?>
<?php

        $xsql = "SELECT `id`, `nb_project`, `nb_description`, `nb_acronym` FROM `lrvl-web72`.`projects`;";

        $cars = array();
        $j = 0;		
		
    $estructura = array();
    $resultado = mysqli_query( $GLOBALS['dbdata'], $xsql );
    while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
        $estructura[] = $row;
    }
    mysqli_free_result($resultado);

	$ff = null; 
	
    $son = 0;
	$soni = 0;
    foreach( $estructura as $fila ) {
			$cars[$j] = array(
                "",
                $fila["id"],
                $fila["nb_project"],
                $fila["nb_acronym"],
                ""
            );
            $j = $j + 1;	
    }
    
        $datos_j = '{ "data": ';
        $datos_j = $datos_j . json_encode($cars);
        $datos_j = $datos_j . ' } ';
		
		echo $datos_j;
?>
