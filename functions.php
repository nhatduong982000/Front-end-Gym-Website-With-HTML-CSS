<?php

require 'database/DBController.php';


$db = new DBController();

$product = new Product($db);