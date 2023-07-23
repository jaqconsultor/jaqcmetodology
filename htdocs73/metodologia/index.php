<?php
/*
 * array ([clave =>] valor, ...)
 * $color = array (�rojo�=>101, �verde�=>51, �azul�=>255);
 * $medidas = array (10, 25, 15);
 * $color[�rojo�] // No olvidar las comillas
 * $medidas[0]
 *
 * foreach (expresi�n_array as $valor)
 * sentencia
 *
 * foreach (expresi�n_array as $clave => $valor)
 * sentencia
 *
 * foreach ($color as $valor)
 * print �Valor: $valor<BR>\n�;
 *
 * foreach ($color as $clave => $valor)
 * print �Clave: $clave; Valor: $valor<BR>\n�;
 */

// $t_cabecera = array('aaaa'=>101, '2222'=>51, '2222'=>255);

// //foreach ($t_cabecera as $valor){
// echo �Valor: $valor['aaaa']<BR>�;
// }

/*
 * $cars=array('Volvo','BMW','Toyota');
 * echo 'I like ' . $cars[0] . ', ' . $cars[1] . ' and ' . $cars[2] . '.';
 *
 * $age=array('Peter'=>'35','Ben'=>'37','Joe'=>'43');
 * echo 'Peter is ' . $age['Peter'] . ' years old.';
 *
 * $cars=array('Volvo','BMW','Toyota');
 * $arrlength=count($cars);
 *
 * for($x=0;$x<$arrlength;$x++)
 * {
 * echo $cars[$x];
 * echo '<br>';
 * }
 *
 * $age=array('Peter'=>'35','Ben'=>'37','Joe'=>'43');
 *
 * foreach($age as $x=>$x_value)
 * {
 * echo 'Key=' . $x . ', Value=' . $x_value;
 * echo '<br>';
 * }
 *
 * // A two-dimensional array:
 * $cars=array
 * (
 * array('Volvo',100,96),
 * array('BMW',60,59),
 * array('Toyota',110,100)
 * );
 */
/*
 * mkdir('/test1/test2', 0777, true);
 * chmod('/test1/test2', 0777);
 */

/*
 * $d = dir(getcwd());
 *
 * echo 'Handle: ' . $d->handle . '<br>';
 * //$cadena = str_replace('\', "\", $d->path);
 * echo $cadena ;
 *
 * //$dire = $resultado;
 * //$dire;
 *
 * $d->close();
 *
 * die();
 */

/*
 * $af = '';
 * $ff = $dire;
 * echo $ff;
 *
 * if ( file_exists( $ff ) ) {
 * unlink( $ff );
 * }
 *
 * $filew = fopen('rutas1.php', 'w');
 * $file = fopen('rutas.php', 'r');
 *
 * while(! feof($file)) {
 * $line = fgets($file);
 * fwrite($filew,$line);
 * echo $line. '<br>';
 * }
 * fclose($file);
 * fclose($filew);
 */

/*
 * $resultado1 = $dire . 'raiz';
 * $estructura = ''.$resultado1.'/';
 * $estructura0 = ''.$resultado1.'/imagenes/';
 * $estructura1 = ''.$resultado1.'/Videos_mp4/';
 * $estructura2 = ''.$resultado1.'/Documentos_pdf/';
 * $estructura3 = ''.$resultado1.'/Audio/';
 * if (!file_exists($estructura)) {
 *
 * if(!mkdir($estructura, 0777, true)) {
 * die('Fallo al crear las carpetas...');
 * }
 * }
 * if (!file_exists($estructura0)) {
 *
 * if(!mkdir($estructura0, 0777, true)) {
 * die('Fallo al crear las carpetas..0.');
 * }
 * }
 * if (!file_exists($estructura1)) {
 *
 * if(!mkdir($estructura1, 0777, true)) {
 * die('Fallo al crear las carpetas..1.');
 * }
 * }
 * if (!file_exists($estructura2)) {
 *
 * if(!mkdir($estructura2, 0777, true)) {
 * die('Fallo al crear las carpetas..2.');
 * }
 * }
 *
 * if (!file_exists($estructura3)) {
 *
 * if(!mkdir($estructura3, 0777, true)) {
 * die('Fallo al crear las carpetas..3.');
 * }
 * }
 *
 */

/*
 * SHOW TABLE STATUS FROM `lrvl-web72`;
 * SHOW FUNCTION STATUS WHERE `Db`='lrvl-web72';
 * SHOW PROCEDURE STATUS WHERE `Db`='lrvl-web72';
 */

/*
 *
 * $conexion = new mysqli("localhost", "lrvl-web72", "lrvl-web72", "lrvl-web72");
 *
 *
 * $result = $conexion->query("SHOW TABLE STATUS FROM `lrvl-web72`");
 * if ($result->num_rows > 0) {
 * while ($row = $result->fetch_assoc()) {
 * echo $row['Name'] .'<br/>';
 * }
 * }
 *
 * echo '<br/>' . '<br/>';
 *
 * $result = $conexion->query("SHOW COLUMNS FROM `projects`");
 * if ($result->num_rows > 0) {
 * while ($row = $result->fetch_assoc()) {
 * echo $row['Field'] . " - " . $row['Type'] . " - " . $row['Null'] . " - " . $row['Key'] . " - " . $row['Default'] . " - " . $row['Extra'] .'<br/>';
 * }
 * }
 *
 * echo '<br/>' . '<br/>';
 *
 * $result = $conexion->query("SHOW COLUMNS FROM `projects_modules`");
 * if ($result->num_rows > 0) {
 * while ($row = $result->fetch_assoc()) {
 * echo $row['Field'] . " - " . $row['Type'] . " - " . $row['Null'] . " - " . $row['Key'] . " - " . $row['Default'] . " - " . $row['Extra'] .'<br/>';
 * }
 * }
 *
 * echo '<br/>' . '<br/>';
 *
 * $result = $conexion->query("SHOW COLUMNS FROM `projects_sections`");
 * if ($result->num_rows > 0) {
 * while ($row = $result->fetch_assoc()) {
 * echo $row['Field'] . " - " . $row['Type'] . " - " . $row['Null'] . " - " . $row['Key'] . " - " . $row['Default'] . " - " . $row['Extra'] .'<br/>';
 * }
 * }
 *
 * echo '<br/>' . '<br/>';
 *
 * $result = $conexion->query("SHOW COLUMNS FROM `managements`");
 * if ($result->num_rows > 0) {
 * while ($row = $result->fetch_assoc()) {
 * echo $row['Field'] . " - " . $row['Type'] . " - " . $row['Null'] . " - " . $row['Key'] . " - " . $row['Default'] . " - " . $row['Extra'] .'<br/>';
 * }
 * }
 *
 *
 */

/*
 * $age=array('Peter'=>'35','Ben'=>'37','Joe'=>'43');
 *
 * foreach($age as $x=>$x_value)
 * {
 * echo 'Key=' . $x . ', Value=' . $x_value;
 * echo '<br>';
 * }
 *
 */

/*
$dire = "";

$resultadoc = $dire . 'controlador';
$estructurac = '' . $resultadoc . '/';
if (! file_exists($estructurac)) {

    if (! mkdir($estructurac, 0777, true)) {
        // die('Fallo al crear las carpetas...');
    }
}

$resultado1 = $dire . 'crud';
$estructura = '' . $resultado1 . '/';
if (! file_exists($estructura)) {

    if (! mkdir($estructura, 0777, true)) {
        // die('Fallo al crear las carpetas...');
    }
}

*/
/*
 * $estructura1 = ''.$resultado1.'/Videos_mp4/';
 * $estructura2 = ''.$resultado1.'/Documentos_pdf/';
 * $estructura3 = ''.$resultado1.'/Audio/';
 * if (!file_exists($estructura)) {
 *
 * if(!mkdir($estructura, 0777, true)) {
 * die('Fallo al crear las carpetas...');
 * }
 * }
 * if (!file_exists($estructura0)) {
 *
 * if(!mkdir($estructura0, 0777, true)) {
 * die('Fallo al crear las carpetas..0.');
 * }
 * }
 * if (!file_exists($estructura1)) {
 *
 * if(!mkdir($estructura1, 0777, true)) {
 * die('Fallo al crear las carpetas..1.');
 * }
 * }
 * if (!file_exists($estructura2)) {
 *
 * if(!mkdir($estructura2, 0777, true)) {
 * die('Fallo al crear las carpetas..2.');
 * }
 * }
 *
 * if (!file_exists($estructura3)) {
 *
 * if(!mkdir($estructura3, 0777, true)) {
 * die('Fallo al crear las carpetas..3.');
 * }
 * }
 *
 */

 $servidor = "localhost:8189";
 $usuario = "root";
 $clave = "";
 $basedatos = "metodologia";

$conexion = new mysqli( $servidor, $usuario, $clave, $basedatos);

// $conexion = new mysqli("localhost", "aulascur_de2", "aulascur_de2", "aulascur_de2");

// Tablas de la Base de datos
$result = $conexion->query("SHOW TABLE STATUS FROM `$basedatos`");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<br/>' . '<br/>';

        echo $row['Name'] . '<br/>';

        $tabla = $row['Name'];

        $result_t = $conexion->query("SHOW COLUMNS FROM " . $tabla);
        if ($result_t->num_rows > 0) {
            while ($row_t = $result_t->fetch_assoc()) {
                echo " F " . $row_t['Field'] . " - T " . $row_t['Type'] . " - N " . $row_t['Null'] . " - K " . $row_t['Key'] . " - D " . $row_t['Default'] . " - E " . $row_t['Extra'] . '<br/>';
            }
        }

        $result_t = $conexion->query("SHOW COLUMNS FROM " . $tabla);
        if ($result_t->num_rows > 0) {
            echo '<br/>' . "Primary Key" . '<br/>';
            while ($row_t = $result_t->fetch_assoc()) {
                if ($row_t['Key'] == 'PRI') {
                    echo " F " . $row_t['Field'] . " - K " . $row_t['Key'] . '<br/>';
                }
            }
        }

        $result_t = $conexion->query("SHOW COLUMNS FROM " . $tabla);
        if ($result_t->num_rows > 0) {
            echo '<br/>' . "Unique Key" . '<br/>';
            while ($row_t = $result_t->fetch_assoc()) {
                if ($row_t['Key'] == 'UNI') {
                    echo " F " . $row_t['Field'] . " - K " . $row_t['Key'] . '( Tabla:' . str_replace('id_', "", $row_t['Field']) . ' Campo:id ) ' . '<br/>';
                }
            }
        }

        $result_t = $conexion->query("SHOW COLUMNS FROM " . $tabla);
        if ($result_t->num_rows > 0) {
            echo '<br/>' . "Foren Key" . '<br/>';
            while ($row_t = $result_t->fetch_assoc()) {
                if ($row_t['Key'] == 'MUL') {
                    echo " F " . $row_t['Field'] . " - K " . $row_t['Key'] . '( Tabla:' . str_replace('id_', "", $row_t['Field']) . ' Campo:id ) ' . '<br/>';
                }
            }
        }

    }
}

echo '<br/>' . '<br/>';

die();

?>
