<?php

Function 	Description
chdir() 	Changes the current directory
chroot() 	Changes the root directory
closedir() 	Closes a directory handle
dir() 	Returns an instance of the Directory class
getcwd() 	Returns the current working directory
opendir() 	Opens a directory handle
readdir() 	Returns an entry from a directory handle
rewinddir() 	Resets a directory handle
scandir() 	Returns an array of files and directories of a specified directory
  
  

$file = fopen("test.txt", "r");
fclose($file);


$file = fopen("test.txt", "r");

//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);
  echo $line. "<br>";
}

fclose($file);


Parameter 	Description
filename 	Required. Specifies the file or URL to open
mode 	Required. Specifies the type of access you require to the file/stream.

Possible values:

    "r" - Read only. Starts at the beginning of the file
    "r+" - Read/Write. Starts at the beginning of the file
    "w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
    "a+" - Read/Write. Preserves file content by writing to the end of the file
    "x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
    "x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
    "c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "e" - Only available in PHP compiled on POSIX.1-2008 conform systems.

include_path 	Optional. Set this parameter to '1' if you want to search for the file in the include_path (in php.ini) as well
context 	Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream
  
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);  
  
 json_decode() 	Decodes a JSON string
json_encode() 	Encode a value to JSON format
json_last_error() 	Returns the last error occurred
json_last_error_msg() 
  
  
 $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);



<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php array_map('unlink', glob("some/dir/*.txt")); ?>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>


// Estructura de la carpeta deseada
$estructura = './nivel1/nivel2/nivel3/';

// Para crear una estructura anidada se debe especificar
// el parámetro $recursive en mkdir().

if(!mkdir($estructura, 0777, true)) {
    die('Fallo al crear las carpetas...');
}

// ...

/*
$micarpeta = '/ruta/miserver/public_html/carpeta';
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}
*/

mkdir('/test1/test2', 0777, true);
chmod('/test1/test2', 0777);

		$resultado1 = "raiz"
			 $estructura  = '/'.$resultado1.'/';
			 $estructura0 = '/'.$resultado1.'/imagenes/';
			 $estructura1 = '/'.$resultado1.'/Videos_mp4/';
             $estructura2 = '/'.$resultado1.'/Documentos_pdf/';
             $estructura3 = '/'.$resultado1.'/Audio/';
			  if(!mkdir($estructura, 0777, true)) {
				die('Fallo al crear las carpetas...');
			}
			if(!mkdir($estructura0, 0777, true)) {
				die('Fallo al crear las carpetas..0.');
			}
			if(!mkdir($estructura1, 0777, true)) {
				die('Fallo al crear las carpetas..1.');
			}
			if(!mkdir($estructura2, 0777, true)) {
				die('Fallo al crear las carpetas..2.');		
			}
			if(!mkdir($estructura3, 0777, true)) {
				die('Fallo al crear las carpetas..3.');		
			}

 
?>
