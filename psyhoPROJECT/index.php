<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Експеримент "ЗІРКА"</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <script src="js/main.js"></script> -->
	<script type="text/javascript" src="js/star3.js"></script>
</head>
<?php
session_start();
include_once "../pages/bd.php";
$id=$_SESSION['id'];
$q=mysql_query("SELECT * FROM users WHERE id='$id'",$db);
$user=mysql_fetch_array($q);
if (!$user['id']) {
exit('Для проходження тесту потрібно зареєструватися!<a href="/reg">Реєстрація</a>');
} else {
?>
<body>
	<div class="bug">
		<img src="img/hand2.svg" alt="картинка розгубленої людини">
		<div class="content">
			<h1>Інструкція</h1>
			<p>Розпочинайте першу спробу лівою рукою, включивши реверс</p>
			<input type="button" value="x" id="close">
		</div>
	</div>
	<div class="points">
		<img src="img/bug.png" alt="картинка розгубленої людини">
		<div class="content">
			<h1>Увага!</h1>
			<p>Ви повинні пройти всі контрольні точки, для того щоб завершити спробу!</p>
			<input type="button" value="x" id="Pclose">
		</div>
	</div>
	<!-- таймер -->
	<div class="result">
		<div id="clock">
			<h2>Час</h2>
			<span id="timer">0</span>
		</div>

		<div id="clock">
			<h2>Помилки</h2>
			<span id="error">0</span>
		</div>

		<div id="clock">
			<h2>Спроба №</h2>
			<span id="proba">0</span>
		</div>
	</div>

	<!-- canvas з зіркою -->
	<div id="wrapper">
		<div id="cursor"></div>
		<div id="wrap-canvas">
			<canvas id="canvas" width="100" height="100" >
 				Ваш браузер застарілий, тому вам не доступні всі  функції даного сайту.
 				Оновіть браузер і повертайтеся.
			</canvas>
		</div>
	</div>
	
	<!-- Панель з настройками -->

	<div class="controlBox">
		<span class="control">
			<img src="img/increase.svg">
			<input type="range" min="0.1" max="2" step="0.02" value="1" id="resize"/>
		</span>
		<span class="control">
			<img src="img/swap3.svg">
			<input type="range" min="-1" max="2" step="0.02" value="1" id="x"/>
		</span>
		<span class="control">
			<img src="img/switch29.svg">
			<input type="range" min="-1" max="2" step="0.02" value="1" id="y"/>
		</span>
		<span class="control">
			<img src="img/line23.svg">
			<input type="range" min="1" max="80" step="1" value="15" id="bold" />
		</span>
		<span class="control">
			<img src="img/analytics5.svg">
			<input type="range" min="4" max="10" step="1" value="5" id="points"/>
		</span>
		<span class="control">
			<img src="img/tent4.svg">
			<input type="range" min="0.0" max="1" step="0.1" value="0.5" id="width"/>
		</span>
		<span class="control">
			<img src="img/speed7.svg">
			<input type="range" min="0.1" max="1" step="0.1" value="0.5" id="speed"/>
		</span>
		<span class="control">
			<img src="img/hide.svg">
			
			<input type="checkbox" id="hide"/>
			<label for="hide"></label>
		</span>
		<span class="control">
			<img src="img/reverse1.svg">
			
			<input type="checkbox" id="checkbox" checked="true"/>
			<label for="checkbox"></label>
		</span>
		<input type="button" value="Розпочати" id="apply">
		<input type="button" value="Відправити дані" id="data">
	</div>
</body>
</html>
<?php
}
?>