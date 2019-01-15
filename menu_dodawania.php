<?php
include("menu.php");
?>

witaj w panelu dodawania!
<hr>
kebaby = 1,
napoje = 2,
przekąski = 15,
piwo = 21,
alkohole = 22<br>
Dodaj produkt:
<form action="aktualizacja.php" method = "GET">
	nazwa : <br>
	<input type="text" name = 'nazwa' ><br>
	opis:<br>
	<input type = "text" name = "opis"><br>
	numer kategorii:<br>
	<input type "text" name = "numer"><br>
	ścieżka do obrazka:<br>
	<input type = "text" name = "sciezka"><br>
	<input type = "hidden" name = "akcja" value = "dodaj"><br>
	<input type="submit" value="wyślij">
</form>
<br><br>


<hr> 
Usuń produkt
<form action="aktualizacja.php" method = "GET">
	nazwa: <br>
	<input type= "text" name = 'nazwa'><br>
	<input type = "hidden" name = "akcja" value = "usun"><br>
	<input type= "submit" value= "wyślij">
</form>

<br><br>
<hr>

Aktualizuj produkt
<br><br>

<form action="aktualizacja.php" method = "GET">
	Chce zaktualizować 
	<select name= 'zmiana'>
		<option value='nazwa'>Nazwa</option>		
		<option value='opis'>Opis</option>
		<option value='img'>Ścieżka</option>
	</select>
	gdzie nazwa to
	<input type= "text" name = 'nazwa'>.<br>
	Nowa wartość 
	<input type= "text" name = 'nowa_wartosc'><br>
	<input type= "hidden" name = "akcja" value = "aktualizuj"><br>
	<input type='submit' value= "wyślij">
</form>