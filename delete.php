<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $STH = $DBH->prepare('DELETE FROM `tasks` WHERE `id` = ?');
  $STH->execute([$id]);

  header('Location: /');
?>
