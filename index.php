<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Портал</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <!-- <h1>Портал</h1> -->

    <form action="/add.php" method="POST">
      <button type="submit" name="add_client" class="btn btn-success">Новый клиент</button>
    </form>

    <form action="/clientbase.php" method="POST">
      <button type="submit" name="show_DB" class="btn btn-primary">База клиентов</button>
    </form>
  
  </div>
</body>

</html>