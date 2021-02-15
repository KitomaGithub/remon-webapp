<?php
$pdo = new PDO('sqlite:master.db');

$statement = $pdo->query("SELECT * FROM ability_list");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($rows);
?>
