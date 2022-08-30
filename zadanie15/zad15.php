<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 15 - ajax</title>
<link rel="stylesheet" href="zad15.css">
<script src="zad15.js"></script>
</head>
<body>

<div class="container">
<form>
<div>
<label>
    Imię i nazwisko: <input
	type="text"
	id="imienazwisko"
	name="imienazwisko"
	required
	>
</label>
</div>
<div>
<label>
		Adres email (zwrotny): <input
		type="email"
		id="email"
		name="email"
		required
		>
</label>
</div>
<div>
<label for="tresc">Treść wiadomości:</label>
<textarea id="tresc" name="tresc"
			rows="15" cols="40">
</textarea>
</div>
<div>
<button type="button" onclick="wyslijFormularz()">Wyślij</button>
</div>
</form>
</div>
<p id="czyudane" style="background-color: lightgreen; margin-left: 15px; width: 350px;"></p>
</body>
</html>