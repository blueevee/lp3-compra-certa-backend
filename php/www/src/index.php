<?php
  require_once 'vendor/autoload.php';

  $faker = Faker\Factory::create();

  echo $faker->name();
  // echo "Hello, my name is maria";
?>