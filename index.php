<?php
$config=require(__DIR__ . '/tableConfig.php');
require(__DIR__ . '/tableController.php');

$table=new tableController($config);
$table->createTable();

?> 