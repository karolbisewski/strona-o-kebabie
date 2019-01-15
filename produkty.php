<style type = "text/css">
#tytul {
	color:black;
	border-style: solid;
	border-width: 2px;
	background: red;
}
#opis {
	background: white;
	border-width: 2px;
	border-color: black;
	border-style: solid;
}
</style>

<?php
	include("menu.php");
	$polaczenie = mysqli_connect('localhost', 'root', '', 'pai_bisewski');
	mysqli_query($polaczenie, 'SET NAMES utf8');

	echo "Dostepne kategorie:";

	$zapytanie_o_kategorie = "SELECT * FROM kategorie";

	$wynik_z_kategoriami = mysqli_query($polaczenie,$zapytanie_o_kategorie);

	while ($kategoria = mysqli_fetch_array($wynik_z_kategoriami, MYSQLI_ASSOC))
	 {
		echo "<br>- <b><a href='/produkty.php/?kat=".$kategoria['id']."'>".$kategoria['nazwa'].'</a></b>';
		
	}

	if(isset($_GET['kat']))
	{
		$kategoria = $_GET["kat"];
		
		$zapytanie = "SELECT * FROM produkty WHERE kategoria_id =".$kategoria;

		$wynik = mysqli_query($polaczenie,$zapytanie);
		echo "<br><br>oto nasze produkty<br>";

		while ($wiersz = mysqli_fetch_array($wynik, MYSQLI_ASSOC)) 
	    {
	    	// tytuł
	    	echo " <span id = 'tytul'>";
	    	echo $wiersz["nazwa"];
	    	echo "</span>";

	    	echo "<br>";
	    	// obrazek
	    	echo '<a href="/obrazki_potraw/'.$wiersz['img'].'" data-lightbox="image-1" data-title="'.$wiersz["nazwa"].'">';
	    	echo "   <img data-lightbox='image-1' src='/obrazki_potraw/".$wiersz['img']."'height='242' width='242'>";
	    	echo '</a>';
			echo "<br>";
			//opis
	    	echo "<span id = 'opis'>";
	    	echo $wiersz["opis"];
	    	echo "</span>";
	    	echo "<br><br><br><br>";
	    }
   
	}
	mysqli_close($polaczenie);
?>

<script src="/js/lightbox-plus-jquery.js"></script>
