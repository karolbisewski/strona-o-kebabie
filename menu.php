<?php
session_start();
if(isset($_SESSION['imie'])) {
	echo 'Witaj uzytkowniku o imieniu: ';
	echo $_SESSION['imie'];
} 
?>

<style type = "text/css">
#tytul {
	color:black;
	border-style: solid;
	border-width: 2px;
	background: red;
}

#tytul:hover {
	background: white;
	color:black;
	border-width: 2px;
	border-color: black;
	border-style: solid;
}
#tytul:active {
	color: inherit;
}

#tytul a, #tytul a:visited , #tytul a:active {
  color: white;
  font-size: 20px;
  text-decoration: none;
}
#tytul a:hover {
	color: black;
}

</style>

<link href="/css/lightbox.css" rel="stylesheet">
<div>
	<span id = 'tytul'>
		<a href="/index.php">Strona Główna</a>
	</span>

	<span id = 'tytul'>
		<a href="/produkty.php">Kategorie</a>
	</span>
	<span id = 'tytul'>
		<a href="/kontakt.php">Kontakt</a>
	</span>
	<span id = 'tytul'>
		<a href="/login.php">Login</a>
	</span>

	<?php
	if(isset($_SESSION['jest_zalogowany'])) {
		if($_SESSION['jest_zalogowany'] == true) {
			echo "<span id = 'tytul'>
					<a href='/menu_dodawania.php'>Modyfikuj</a>
				</span> ";
			echo "<span id = 'tytul'>
				<a href='/wyloguj.php'>Wyloguj</a>
			 </span>";
		}
	}
	?>
</div>
<br>



