<?php

  echo 'HI How are you!';
  $obj = new main();
  $car = $obj->createCar();
  $car->make = 'ford';
  $car->model = 'mustang';
  $car->year = '2017';

  print_r($car);
 
  class main {
   
    public function _construct() {
      echo 'Hello World!!!';
    }
   
    public function createCar() {
      $car = new car;
      return $car;
    }

    public function _destruct() {
      echo 'Goodbye World!';
    }

  }

?>
