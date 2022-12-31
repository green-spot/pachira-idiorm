<?php

Pachira::addPlugin("idiorm", function ($options) {
  ORM::configure(el($options, "schema"));
  ORM::configure(el($options, "configure", []));

  function orm($name){
    return ORM::for_table($name);
  }
});
