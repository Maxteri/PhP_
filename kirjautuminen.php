<?php
	session_start();
	$_SESSION["user"] = "kungen";
	$_SESSION["password"] = "anssi";
	
	$user = $_SESSION["user"];
	$password = $_SESSION["password"];
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Kirjaudu sisään</title>
</head>

<body>

	<form>
  Käyttäjätunnus:<br>
  <input type="text" action"" name="kayttaja" method="post"><br>
  Salasana:<br>
  <input type="text" action"" name="salasana" method="post"><br>
  <input type="submit" value="Kirjaudu" >
</form>

<?php
	
?>

</body>
</html>