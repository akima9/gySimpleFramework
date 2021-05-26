<?php

require_once "./vendor/autoload.php";

use Eclair\Database\Adaptor;

Adaptor::setup('mysql:dbname=myapp_test', 'root', 'root');

$posts = Adaptor::getAll('select * from posts');

var_dump($posts);