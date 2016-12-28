<?php
if($_SERVER['HTTP_HOST'] != 'davidtwigger.com'){
	header('Location: http://davidtwigger.com', true, 301);
}
header('Content-Type: text/html; charset=utf-8');
header('Vary: Accept-Encoding');
$offset = 30 * 60 * 60;
$expire = "expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expire);
//header("cache-control: must-revalidate");

define('FROM_LESS', false);
?><!DOCTYPE html>
<html id="home" lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<?php /* <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"> */ ?>
<title>David Twigger - Développeur Front back &amp; mobile - CV en ligne</title>
<script>

</script>
</head>
<body>
<canvas id="canvas"></canvas>
</body>
</html>