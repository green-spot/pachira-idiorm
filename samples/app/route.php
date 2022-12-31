<?php

namespace App;

get("/", function(){
  $users = orm("users")->find_many();
  view("top", ["users" => $users]);
});
