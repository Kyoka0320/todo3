<?php

require_once('Models/Task.php');

// ファイルの読み込み
$title = $_POST['title'];
$contents = $_POST['contents'];
$currenttime = date("Y/m/d H:i:d");

// データの受け取り
$task = new Task();
$task->create([$title,$contents,$currenttime]);

