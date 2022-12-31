## usage

```
$ composer require green-spot/pachira-idiorm
$ cp -r vendor/green-spot/pachira-idiorm/samples/. ./
```

```php
<?php

get("/", function(){
  $users = orm("users")->find_many();
  view("top", ["users" => $users]);
});

Pachira::run([
  "view" => [
    "directory" => __DIR__ . "/views/"
  ],
  "idiorm" => [
    "schema" => "mysql:host=localhost:;dbname=test",
    "configure" => [
      "username" => "user",
      "password" => "pass",
    ]
  ]
]);
```
