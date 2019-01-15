<?php
	include("menu.php");
?>
tajny panel dodawania<br>

<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'pai_bisewski');
	mysqli_query($polaczenie, 'SET NAMES utf8');


	if ($_GET['akcja'] == "dodaj") { 
		echo 'DODAWNIE';

		$nazwa = $_GET['nazwa'];
		$kat = $_GET['numer'];
		$opis = $_GET['opis'];
		$sciezka = $_GET['sciezka'];

		$zapytanie = "INSERT INTO produkty ( id, kategoria_id, nazwa,opis,img) 
		             VALUES (NULL, $kat ,'$nazwa','$opis','$sciezka')";
		
		$wynik= mysqli_query($polaczenie, $zapytanie);
		echo $zapytanie;
	}

	if ($_GET['akcja'] == 'usun') {
		echo "USUWANIE";
		
		$nazwa = $_GET['nazwa'];
		$zapytanie = "DELETE FROM produkty WHERE nazwa = '$nazwa'";
		//$zapytanie = "DELETE FROM produkty WHERE nazwa = 'pepsi'";
		$wynik= mysqli_query($polaczenie, $zapytanie);
		echo $zapytanie;
	}
	
	if ($_GET['akcja'] == 'aktualizuj'){
		echo "AKTUALIZOWANIE<br>";

		$nazwa = $_GET['nazwa'];
		$nowa_wartosc = $_GET['nowa_wartosc'];
		$zmiana = $_GET['zmiana'];

		$zapytanie = "UPDATE produkty SET $zmiana = '$nowa_wartosc' WHERE nazwa = '$nazwa'";  
		$wynik= mysqli_query($polaczenie, $zapytanie);
		echo $zapytanie;
	}

	mysqli_close($polaczenie);

	Header("Location: index.php");
	die();
?>
