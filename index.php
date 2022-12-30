<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();
//Very dangeraous for sql injection, always split suery and parameters, like above
//$post = $db->query("select * from posts where id = 1")->fetch();
//$posts = $db->query("select * from posts")->fetchAll();

dd($posts);