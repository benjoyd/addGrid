<?php $title='Rutnätsplugin';?>
 
 <!doctype html>
<html lang='en' class='no-js'>
<head>
<meta charset='utf-8' />
<title><?=isset($title) ? $title : 'Template for testprograms in JavaScript'?></title>
<link rel="stylesheet/less" type="text/css" href="less/style.less">
<script src="js/less.min.js"></script>
</head>
<body>

<div class='wrapper'>

<div id='box'>
<h1>Benjoyds Rutnätsplugin</h1>
<p>Rutnätsplugin som kan användas till exempel när man vill kalkera bilder sådär som man ibland gjorde när man var liten.</p>
<h2>Instruktioner för användning</h2>
<p>Desto fler klick desto mer rutnät. För att ta bort rutnät för musen över det.</p>

<h2>Här nedan kan du testa pluginet!</h2>
<br />
<img class='grid' src='gubbe.png' alt='no' />

</div>

</div>

<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>