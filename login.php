<?php
include("menu.php");
?>


witaj w panelu logowania

<form action="autoryzacja.php" method = "GET">
	login: <br>
	<input type="text" name = 'login' ><br>
	hasło:<br>
	<input type = "text" name = "haslo"><br><br>
	<input type="submit" value="Zaloguj się">
</form>