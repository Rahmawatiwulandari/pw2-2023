<?php

  class Fruit {
    //Property
     Public $name  ;
     Public $color ;

     // Method
     function getName() {
        return $this ->name;

     }
     function getColor() {
        return $this->color;
     }


  }
  $apple = new Fruit();
  $apple->name = "Apple";
  $apple->color = "Red";
  echo $apple->getName();
  echo $apple->getColor();

  echo "<br><br>";

   $banana = new Fruit();
   $banana->name = "Banana";
   $banana->color = "Yellow";
   echo $banana->getName();
   echo $banana->getColor();

  ?>