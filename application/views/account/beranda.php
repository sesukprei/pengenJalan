<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        pengenJalan
    </title>
</head>
<body>
    <h1>Welcome</h1>
    <p>
    Silakan klik link
    <?php echo anchor('login','Masuk'); ?>
    untuk masuk ke dalam sistem atau
    <?php echo anchor('register','Daftar'); ?>
    untuk mendaftar.
    </p>
</body>
</html>
