<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Новости</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="home.php"><h1>Информационный портал</br>Москва24</h1></a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Персональная страница</a>
				<a href="logout.php" ><i class="fas fa-sign-out-alt"></i>Выйти</a>
			</div>
		</nav>
		<div class="content">
			<h2>Новости Москвы</h2>
		</div>
		<div id="container">
   
   <div id="sidebar">
    <p><a href="news.php">Новости</a></p>
    <p><a href="usugi.html">Услуги</a></p>
    <p><a href="facts.php">А вы знали?</a></p>
    <p><a href="contacts.php">Контакты</a></p>
   </div>
   <div id="content">
    
    
   </div>
   <div id="footer">
   <?php
    echo " ".date("d F Y")."</br>";
    echo "".date("H:i")
?>
