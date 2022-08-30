<?php
  function haslo_czytaj(&$z_pliku)
  {
    @$plik=fopen('pass.txt','r');
    if (!$plik) return false;
    if (!flock($plik, LOCK_EX))
    {
      fclose($plik);
      return false;
    }
    $z_pliku=fread($plik,filesize('pass.txt'));
    flock($plik, LOCK_UN);
    return fclose($plik);
  }
  
  function haslo_ok($tekst, $tekst_zakodowany)
  {
    return md5($tekst)===$tekst_zakodowany;
  }
?>