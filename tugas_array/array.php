<?php

$m_fruits = [
["id" => "1","name" => "Mangga ", "color" => "hijau", "stock" => 30, "price" => 30000, "description" => "Mangga dengan rasa manis dengan aroma harum"],
["id" => "2","name" => "durian", "color" => "kuning", "stock" => 18, "price" => 25000, "description" => "durian dengan aroma yang khas"],
["id" => "3","name" => "anggur merah", "color" => "merah", "stock" => 7, "price" => 15000, "description" => "Buah kecil dengan biji yang berwarna merah"],
["id" => "4","name" => "kiwi ", "color" => "hijau", "stock" => 60, "price" => 40000, "description" => "kiwi dengan rasa asam"],
["id" => "5","name" => "kurma ", "color" => "coklat", "stock" => 50, "price" => 70000, "description" => "kurma yang rasanya manis,cocok untuk dimakan setiap hari"],
["id" => "6", "name" => "semangka ", "color" => "hijau", "stock" => 30, "price" => 30000, "description" => "semangka dengan rasa manis dan harga yang terjangkau"],
];

      /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>harga</th>
          <th>deskripsi</th>
        </tr>
      </thead>
        

      <tbody class="bg1">
       <?php
      //table buah//
      foreach ($m_fruits as $fruit) {
        echo  "<tr>";
        echo "<th>".$fruit["id"]."</th>";
        echo "<th>".$fruit["name"]."</th>";
        echo "<th>".$fruit["color"]."</th>";
        echo "<th>".$fruit["stock"]."</th>";
        echo "<th>".$fruit["price"]."</th>";
        echo "<th>".$fruit["description"]."</th>";
        echo "</tr>";
      }
      
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>