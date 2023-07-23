<?php

phpinfo( );

?>
<?php
die();
Echo "<h1>Directorios</h1>";
$directorio = opendir("."); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
		if ( $archivo == "." || $archivo == ".." ) {
			
		} else {
			echo $archivo . "<br />"; //de ser un directorio lo envolvemos entre corchetes	
		}
    }
    else
    {
        //echo $archivo . "<br />";
    }
}

Echo "<h1>Archivos</h1>";
$directorio = opendir("."); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo $archivo . "<br />";
    }
}

?>

