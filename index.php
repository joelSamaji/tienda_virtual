
<?php
// VARIABLES DE CONFIGURACION----------------------
require_once("Config/Config.php");

// HELPERS ----------------------------------------
require_once("Helpers/Helpers.php");

//CONTROLLER/METHOD/PARAMS--------------------------
$url = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
if(!empty($arrUrl[1])){
    if($arrUrl[1] != ""){
        $method = $arrUrl[1];
    }
} else {
    $method = $arrUrl[0];
}
$params = "";

if(!empty($arrUrl[2])){
    if($arrUrl[2] != ""){
        for($i = 2; $i < count($arrUrl); $i++){
            $params .= $arrUrl[$i]. ",";
        }
        $params = trim($params, ',');
    }
}

// AUTLOAD------------------------------
require_once("Libraries/Core/Autload.php");
// CONTROLADOR Y METODO------------------
require_once("Libraries/Core/Load.php")

/* echo "Controlador: " . $controller . "<br>Metodo: ". $method. "<br>Parámetros: ". $params. "<br>";  */


?>
