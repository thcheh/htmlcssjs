<?php
	error_reporting(E_ALL|E_STRICT);
	ini_set('display_errors', 1);

    $adresat = 'XD';
    $temat = 'Wiadomość ze strony WWW';
	$imienazwisko = trim($_POST['imienazwisko']);
	$email = trim($_POST['email']);
	$tresc = trim($_POST['tresc']);
	$temat = '=?UTF-8?B?' . base64_encode($temat) . '?=';
	$naglowki  = 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
	$naglowki .= 'From: =?UTF-8?B?' . base64_encode($imienazwisko) . "?= <$email>" . PHP_EOL;
	$naglowki .= "Reply-To: $email" . PHP_EOL;
	$naglowki .= "Return-Path: -f$email" . PHP_EOL;
	$naglowki .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;
	$naglowki .= "X-Priority: 1" . PHP_EOL;
	$protokol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
	$strona = "$protokol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$data = date('j.m.Y');
	$czas = date('H:i:s');
	$wiadomosc = "Wiadomość ze strony: $strona<br>Imię i nazwisko: $imienazwisko<br>Adres email: $email<br>Treść wiadomości:<br>$tresc<br>Wiadomość wysłana dnia $data o godz. $czas.";
	
	if (mail($adresat, $temat, $wiadomosc, $naglowki)) {
		echo 'Twoja wiadomość została wysłana!';
	} else {
		echo 'Wystąpił błąd podczas wysyłania!';
	}
?>
