<?php
function create_password($n){
  $password = '';
  for ($i = 0; $i < $n; $i++) {
    $password .= 'x';
  }
  return $password;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Password generator</title>
</head>
<body>
  <?php echo create_password(6) ?>
</body>
</html>