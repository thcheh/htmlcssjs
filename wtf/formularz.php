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
<body>
<div class="container">
  <form action="formularz.php" method="post">
    <div>Login: <input type="text" name="login" /></div>
    <div>Hasło: <input type="password" name="haslo" /></div>
    <input type="submit" name="logowanie"  value="Zaloguj" />
  </form>
</div>
  <div class="container">
  Login: kamil<br>Hasło: kamil123<br>zakodowane w pliku w md5
  </div>
  <br />
  <?php
    include('funkcje.php');
    if (!isset($_POST['logowanie'])) exit;
  
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];

    if (!haslo_czytaj($z_pliku))
    {
      echo 'Powtórz operację!';
      exit;
    }
    
    $z_pliku_tablica=explode(' ',$z_pliku);
    if (count($z_pliku_tablica)!==2)
    {
      echo 'Błędnie zapisany login i hasło!';
      exit;
    }
    
    $login_zakodowany=$z_pliku_tablica[0];
    $haslo_zakodowane=$z_pliku_tablica[1];
    
    if (!haslo_ok($login, $login_zakodowany) || !haslo_ok($haslo, $haslo_zakodowane))
    echo 'Błędny login lub hasło!';
    else echo "Witaj $login! Zostałeś poprawnie zalogowany!";
  ?>
  <br />
</body>