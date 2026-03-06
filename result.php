  <?php require_once 'functions.php' ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Password</title>
</head>

<body>
  <div class="container my-4 text-center">
    <h1>Your password:</h1>
    <hr>
    <h3>
      <?php
      echo "<h3>" . create_password() . "</h3>"
        ?>
    </h3>
  </div>
</body>

</html>