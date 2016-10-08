<?php
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);



$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf-8", "root", "", $opt);
$sql = "SELECT * FROM `test` WHERE 1";
$sth = $pdo->query($sql);
print_r($sth->fetchAll());

