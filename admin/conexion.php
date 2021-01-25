<?php
/*Pruebas con el servidor de la pagina */
//server, usuario, contra, bdd
$server = '209.59.139.160';
$user = 'consu237';
$pass = '4Uh94nojA0';
$db = 'consu237_dentalcao';
try{
	#el ultimo parametro es para que acepte acentos y ñ's'
	$conn = new PDO("mysql:host={$server};dbname={$db}",$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
#$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

}catch(PDOException $e){
	echo 'Error'.$e->getMessage();
}

class Constants {    
    const SERVER_PATH = "http://consultoriodentalcao.com/admin/";
    const FOLDER_IMAGE = "images/";    
}

class CompressImage {
    static public function compress_image($source_url, $destination_url, $quality) {
    
    $info = getimagesize($source_url);
    list($ancho, $alto) = getimagesize($source_url);
    if ($ancho > 1300) {
            $n_ancho = 1200;
            $n_alto = 720;
            $thumb = imagecreatetruecolor($n_ancho, $n_alto);
            $quality = 100;
    } else {
        $n_ancho = $ancho;
    }

            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);
            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);
            elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);
            elseif ($info['mime'] == 'image/jpg')
                    $image = imagecreatefrompng($source_url);
            if ($n_ancho == 1200) {
                imagecopyresampled($thumb, $image, 0, 0, 0, 0, $n_ancho, $n_alto, $ancho, $alto);
                imagejpeg($thumb, $destination_url, $quality);              
            }else{
                imagejpeg($image, $destination_url, $quality);  
            }     
        return $destination_url;
    }  
}
?>