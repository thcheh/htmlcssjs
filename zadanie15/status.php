<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 15 - status wyslanej wiadomosci</title>
</head>
<body>
    <h1>Status wysyłanej wiadomości</h1>
    <p>
        <?php require 'email-sending-script.php'; ?>
    </p>
<p>
Podgląd testowy:
<br>
Wiadomość ze strony: <?php echo "$strona" ?><br>
Imię i nazwisko: <?php echo "$imienazwisko" ?><br>
Adres email: <?php echo "$email" ?><br>
Treść wiadomości:<br><?php echo "$tresc" ?><br>
Wiadomość wysłana dnia <?php echo "$data" ?> o godz. <?php echo "$czas" ?>
</p>
</body>
</html>