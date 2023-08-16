<?php

if(!session_id()) session_start();

require_once '../app/init.php';
set_include_path('../db/img/');

$app = new App;