<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php
  require 'configDB.php';

  $query = "SELECT * FROM clients";
  $STH = $DBH->query($query);
  
  echo '<ul>';
    foreach($STH as $row) {
      echo 
      '<li><b>' . $row["name"] . '</b>
              <a href="profile.php?id=' . $row["id"] . '">
                <button>Профиль</button>
              </a>
      </li>';
    }
    echo '</ul>';
?>
<form action="/" method="POST">
      <button type="submit" name="return_to_main" class="btn btn-warning">На главную</button>
</form>

  