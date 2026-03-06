<?php
function create_password()
{
  $length = $_GET['length'] ?? 0;
  $password = '';
  $lowercase = isset($_GET['lowercase']) ? 'abcdefghijklmnopqrstuvwxyz' : '';
  $uppercase = isset($_GET['uppercase']) ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : '';
  $numbers = isset($_GET['numbers']) ? '1234567890' : '';
  $symbols = isset($_GET['symbols']) ? '%&/()=_-?!' : '';

  $allChars = $lowercase . $uppercase . $numbers . $symbols;
  if (!$symbols && !$numbers && !$uppercase && !$lowercase) {
    return "can't generate a password with no characters";
  }
  ;

  for ($i = 0; $i < $length; $i++) {
    $randPos = rand(0, (strlen($allChars) - 1));
    $randChar = substr($allChars, $randPos, 1);
    $password .= $randChar;
  }
  ;

  return $password;
}
?>