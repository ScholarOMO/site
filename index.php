<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
<title>Наш первый сайт</title>
<link rel="stylesheet" href="/styles.css"/>
</head>
<body>
<header>
	<h1 style="text-align: center;"> Personal project </h1>
</header>
<div style="border: solid 2px #2392fa; margin: 10px; font-size: 20px;">
	<ul>
    <nav>
    	<li>
        <a href="index.php?page=main">Главная страница сайта</a></li>
        <li> 
        <a href="index.php?page=contacts">Контакты</a>
    	</li>
    </nav>
	</ul>
</div >

<?php include basename($page).'.php'; ?>

<footer style="header">
    Сайт сделан сегодня и все права принадлежат его создателю :)
</footer>
</body>
</html>
