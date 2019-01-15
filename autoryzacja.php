<?php
include("menu.php");
?>

<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'pai_bisewski');
	mysqli_query($polaczenie, 'SET NAMES utf8');

	echo $_GET['login'];
	echo"<br>";
	echo $_GET['haslo'];
	$login = $_GET['login'];
	$haslo = $_GET['haslo'];
	$zapytanie = " SELECT * FROM user WHERE login = '$login'";
	echo $zapytanie;
	$wynik = mysqli_query($polaczenie,$zapytanie);
	$ilosc_wierszy = mysqli_num_rows($wynik);
	echo "<br>";
	if($ilosc_wierszy == 1){
		echo "znaleziono";
		$uzytkownik = mysqli_fetch_array($wynik, MYSQLI_ASSOC);
		echo $uzytkownik['id'];
		echo $uzytkownik['login'];
		echo $uzytkownik['haslo'];
		if($haslo == $uzytkownik['haslo']){
			// haslo i login się zgadza
			$_SESSION['imie'] = $uzytkownik['login'];
			$_SESSION['jest_zalogowany'] = true;
			header("location: index.php");
			mysqli_close($polaczenie);
			die(); // zatrzymuje wykonowanie kodu
		}
		else{
			echo 'niepoprawne haslo';
		}
	} 
	else {
		echo "nie znaleziono";
	}

	mysqli_close($polaczenie);
	header("location: login.php");
	mysqli_close($polaczenie);

?>
