<?php
  function create_password($n)
  {
    $password = '';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $symbols = '!"£$%&/()=';
    $allChars = $lowercase . $uppercase . $numbers . $symbols;

    for ($i = 0; $i < $n; $i++) {
      $randPos = rand(0, (strlen($allChars) - 1));
      $randChar = substr($allChars, $randPos, 1);
      $password .= $randChar;
    }
    ;

    return $password;
  }
?>