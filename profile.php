<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php
  require 'configDB.php';

  $STH = $DBH->prepare ("SELECT * FROM clients WHERE id = :id");
  $STH->execute(array ('id'=> $_GET['id']));

    echo '<ul>
    <table class="table table-bordered table-hover align-center">
      <tr>
        <th>ID</th>
        <th>ФИО</th>
        <th>Возраст</th>
        <th>Дата регистрации</th>
        <th>Контракт</th>
        <th>Соревнования</th>
        <th>Основной спорт</th>
        <th>Разряд</th>
      </tr>';
    echo '<ul>';  
    foreach($STH as $row) {
      echo
  
      '<tr>
        <th>' . $row['id'] . '</th>
        <th>' . $row['name'] . '</th>
        <th>' . $row['age'] . '</th>
        <th>' . $row['registraion'] . '</th>
        <th>' . $row['contract'] . '</th>
        <th>' . $row['competitions'] . '</th>
        <th>' . $row['primary_sport'] . '</th>
        <th>' . $row['rank'] . '</th>
      </tr>';
    } /*  echo 
      '<li><b>' . $row["id"] . '</b></li>
      <li><b>' . $row['name'] . '</b></li>
      <li><b>' . $row['age']  . '</b></li>
      <li><b>' . $row['registraion'] . '</b></li>
      <li><b>' . $row['contract'] . '</b></li>
      <li><b>' . $row['competitions']  . '</b></li>
      <li><b>' . $row['primary_sport'] . '</b></li>
      <li><b>' . $row['rank']  . '</b></li>
                    
      </ul>'; */
    echo '</table>'; 
   
 
?>
<form action="/edit.php?id=" method="POST">
      <button type="submit" name="edit" class="btn btn-warning">Редактировать</button>
</form>
<form action="/clientbase.php" method="POST">
      <button type="submit" name="return" class="btn btn-primary">Назад</button>
</form>



