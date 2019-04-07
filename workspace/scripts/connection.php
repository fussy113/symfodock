<?php
  $dsn = 'pgsql:dbname=symfodock host=postgres port=5432';
  $user = 'symfodock';
  $password = 'password';

  try{
    $dbh = new PDO($dsn, $user, $password);
  }catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
  }
?>
