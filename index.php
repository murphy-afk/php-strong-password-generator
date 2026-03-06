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
  <div class="container d-flex flex-column align-items-center">
    <h1 class="py-3">Password generator</h1>
    <form action="index.php" class="my-4 w-75 d-flex flex-column align-items-center">
        <label for="lenght" class="form-label">choose the lenght of your password</label>
        <input type="number" name="lenght" id="lenght" class="form-control mb-4 w-50 text-center" placeholder="0">
      <button class="btn btn-primary">generate</button>
    </form>

    <?php 
  $lenght = $_GET['lenght'] ?? 0;
  echo "<h3>" . create_password($lenght) . "</h3>" ?>
  </div>
</body>
</html>