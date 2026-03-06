<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Password generator</title>
</head>

<body>
  <div class="container d-flex flex-column align-items-center">
    <h1 class="py-3">Password generator</h1>
    <form action="result.php" class="my-4 w-75 d-flex flex-column align-items-center">
      <label for="length" class="form-label">choose the length of your password</label>
      <input type="number" required min="1" name="length" id="length" class="form-control mb-4 w-25 text-center" placeholder="0">
      <div class="mb-4">
        <div class="form-check">
          <input type="checkbox" name="symbols" id="symbols" class="form-check-input" checked>
          <label for="symbols" class="form-check-label">symbols</label>
        </div>
        <div class="form-check">
          <input type="checkbox" name="numbers" id="numbers" class="form-check-input" checked>
          <label for="symbols" class="form-check-label">numbers</label>
        </div>
        <div class="form-check">
          <input type="checkbox" name="uppercase" id="uppercase" class="form-check-input" checked>
          <label for="symbols" class="form-check-label">uppercase letters</label>
        </div>
        <div class="form-check">
          <input type="checkbox" name="lowercase" id="lowercase" class="form-check-input" checked>
          <label for="symbols" class="form-check-label">lowercase letters</label>
        </div>
      </div>
      <button class="btn btn-primary">GENERATE</button>
    </form>
  </div>
</body>

</html>