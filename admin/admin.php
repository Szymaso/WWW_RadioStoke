<?php
	
	session_start();
?>
<!DOCTYPE HTML>
<head>
	<title>Radio Stoke</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="shortcut icon" href="../images/logo.png"/>
	<link rel="stylesheet" href="../style.css" type="text/css"/> 
	<link rel="stylesheet" href="../slider/anythingslider.css" type="text/css"/> 
	<script src="../js/jquery-1.6.3.min.js"></script>
	<script src="../slider/jquery.anythingslider.min.js"></script>
</head>
<script>
	$(document).ready(function() {
		$('#slider').anythingSlider(
		{
			autoPlay: true, 
			buildArrows: false
		});
		$('.menu').fadeTo(0, 0.3);
		$('.menu').mouseover(function(){
			$(this).stop().fadeTo(300, 1);
		});
		$('.menu').mouseout(function(){
			$(this).stop().fadeTo(700, 0.3);
		});
		$('#top img').fadeTo(0, 0.3);
		$('#top img').mouseover(function(){
			$(this).stop().fadeTo(300, 1);
		});
		$('#top img').mouseout(function(){
			$(this).stop().fadeTo(700, 0.3);
		});
	});
</script>
<body>
	<script type="text/javascript" charset="UTF-8" src="http://radiostoke.panelradiowy.pl/toolbar.php"></script>
	<div id="kontener">
		<header>
			<section id="top">
				<p>Słuchaj nas w swoim odtwarzaczu: </p>
				<a href="#"><img src="../images/winamp.png" alt="Winamp"></a>
				<a href="#"><img src="../images/wmp.png" alt="WMP"></a>
				<a href="#" class="fb"><img src="../images/facebook.png" alt="Facebook"></a>
			</section>
			<section id="logo">
				<a href="#"><img src="../images/logo.png" alt="Logo Radio Stoke"/></a>
			</section>
			<section id="menu">
				<ul>
					<li class="menu"><a href="index.php">Strona główna</a></li>
					<li class="menu"><a href="#">Ramówka</a></li>
					<li class="menu"><a href="#">Pozdrowienia</a></li>
					<li class="menu"><a href="#">Prezenterzy</a></li>
					<li class="menu"><a href="#">Playlista</a></li>
					<li class="menu"><a href="#">Chat</a></li>
					<li class="menu"><a href="forum">Forum</a></li>
					<li class="menu"><a href="#">Aplikacja</a></li>
					<li class="menu"><a href="#">Kontakt</a></li>
				</ul>
			</section>
			<section id="pozdrowienia">
				<p>Pozdrowienia: </p>
			</section>
		</header>
		<section id="middle">
			<?php
			if(isset($_SESSION['nazwa']))
			{
			include 'dane.php';
			@ $bd = mysqli_connect($baza['0'],$baza['1'],$baza['2'],$baza['3']);
			if(!$bd)
			{
				echo '<p class="blad">Brak połączenia z bazą danych.</p>';
				exit;
			}
			$zapytanie = "select * from kontakt where odczyt=0";
			$wynik = mysqli_query($bd,$zapytanie);
			if(mysqli_num_rows($wynik) > 0)
				$nowa = 1;
			?>
			<table id="menu_admin">
				<tr>
					<td><a href="logi.php">Logi</a></td>
				</tr>
				<tr>
					<td><a href="news_przegladaj.php">Zarządzaj newsami</a></td>
				</tr>
				<tr>
					<?php
						if($nowa)
							echo '<td><a class="nowa" href="kontakt_odczyt.php">Wiadomości</a></td>';
						else
							echo '<td><a href="kontakt_odczyt.php">Wiadomości</a></td>';
					?>
				</tr>
				<tr>
					<td><a href="wyloguj.php">Wyloguj</a></td>
				</tr>
			</table>
			<?php
			}
			else
				echo '<p class="blad">Nie jesteś zalogowany</p>';
			?>
		</section>
	</div>
</body>
<footer>
	<p>Copyright © Radio Stoke 2015</p>
</footer>
