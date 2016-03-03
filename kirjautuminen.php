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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
</script>
<title>Kirjaudu sisään</title>
</head>

<body>

	<form>
  Käyttäjätunnus:<br>
  <input type="text" action"kirjautuminen.php" name="kayttaja" method="post"><br>
  Salasana:<br>
  <input type="text" action"kirjautuminen.php" name="salasana" method="post"><br>
  <input type="submit" value="Kirjaudu" >
</form>

<p>This is a paragraph.</p>

<button>Toggle between hide() and show()</button>

</body>
</html>