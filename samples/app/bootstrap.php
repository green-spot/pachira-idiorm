<?php

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/route.php";

Pachira::run([
  "view" => [
    "directory" => __DIR__ . "/views/"
  ],
  "idiorm" => [
    "schema" => "mysql:host=localhost;dbname=test",
    "configure" => [
      "username" => "",
      "password" => "",
    ]
  ]
]);
