<?php
$protocolo = 'https://';
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$web = "http://" . $host;

if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . '/index_co.php');
    exit();
} else {
   include('./index_co.php');

 } ?>
<!DOCTYPE HTML>
<html>
<head>
<title>IVAO Colombia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:type" content="article">
<meta property="og:description" content="En IVAO Colombia, división de IVAO (International Virtual Aviation Organisation), puedes volar o controlar un aeropuerto con el máximo profesionalismo posible. Además es totalmente gratis.">
<meta property="og:locale" content="es_CO">
<meta property="og:site_name" content="IVAO Colombia">
<meta property="og:image" content="<?php echo $protocolo . $_SERVER["HTTP_HOST"]; ?>/img/slide-2.jpg">
<meta property="og:url" content="<?php echo $protocolo . $_SERVER["HTTP_HOST"]; ?>">
</head>
<body>
</body>
</html>

