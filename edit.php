<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php

  require 'configDB.php';
  $STH = $DBH->prepare ("SELECT * FROM clients WHERE id = :id");
  $STH->execute(array ('id'=> $_GET['id']));

  foreach ($STH as $row): ?>  
     

    <form action="" method="GET">
      <input type="text" name="name" value=" <?php echo $row['id']; ?> "><br>
      <input type="text" name="age" placeholder="Возраст"><br>
      <input type="text" name="registration" placeholder="Дата регистрации dd.mm.yyyy"><br>
      <input type="text" name="contract" placeholder="Номер договора"><br>
      <input type="text" name="competitions" placeholder="Соревнования"><br>
      <input type="text" name="primary_sport" placeholder="Основной спорт"><br>
      <input type="text" name="rank" placeholder="Разряд"><br>
      <button type="submit" name="accept" class="btn btn-primary">Править</button>    
    </form>
   
    <?php endforeach;
  
  
  /* Statement Handle */
 /*  $STH = $DBH->prepare('INSERT INTO clients(name, age, registration, contract, competitions, primary_sport, rank) VALUES(:name, :age, :registration, :contract, :competitions, :primary_sport, :rank)');
  
  $STH->execute(array (
    'name' => $_GET['name'], 
    'age' => $_GET['age'], 
    'registration' => $_GET['registration'],
    'contract' => $_GET['contract'],
    'competitions' => $_GET['competitions'],
    'primary_sport' => $_GET['primary_sport'],
    'rank' => $_GET['rank'])); */

   

    if(isset($_GET['aceept'])) {
      echo 'Клиент обвновлен';
    }
?>
<form action="/" method="POST">
      <button type="submit" name="return_to_main" class="btn btn-warning">На главную</button>
</form>