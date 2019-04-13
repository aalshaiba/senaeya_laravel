<?php

$connect = mysqli_connect('localhost:8889', 'root', 'root', 'mydb');

$file_name = 'data1.json';

$data = file_get_contents($file_name);

$arr = json_decode($data, true);

foreach ($arr as $row) {
      $sql = "INSERT INTO shops (name, address, number, url) VALUES ('".$row["name"]."','".$row["formatted_address"]."','".$row["formatted_phone_number"]."','".$row["url"]."')";
      mysqli_query($connect, $sql);
}

echo 'Inserted';
