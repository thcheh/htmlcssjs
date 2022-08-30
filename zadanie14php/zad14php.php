<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 14 - test php</title>
	<style>
	.container {
		margin-top: 35px;
		margin-left: 15px;
		background-color: #668cff;
		border: 2px solid black;
		border-radius: 1px;
		width: 350px;
		height: auto;
		padding-top: 25px;
		padding-left: 20px;
		padding-right: 15px;
		padding-bottom: 15px;
		line-height: 1.5em;
	}
	</style>
</head>
<body>
<div class="container">
<form action="./status.php" method="post">
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
<input type="submit" value="Wyślij"> <input type="reset" value="Wyczyść">
</div>
</form>
</div>
</body>
</html>