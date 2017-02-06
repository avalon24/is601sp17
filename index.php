<?php

  //echo 'Hi!! How are you!';
  $obj = new main();
  
  $car = $obj->createCar();
  $car->make = 'ford';
  $car->model = 'mustang';
  $car->year = '2017';
  
  print_r($car);
 
  class main {
     
    public function __construct() {
      echo 'Hello World!!!';
    }
   
    public function createCar() {
      $car = new car;
      return $car;
    }

    public function __destruct() {
      echo 'Goodbye World!';
    }

  }
  
  class car {
     public $make;
     public $model;
     public $year;
  }

?>




