<?php
require "gerador.php";

$return_rand = false;

$update = (bool) $_GET['update'];

if ($update) {
    $return_rand = geradorNumeros();
}

header("Location: test.php?numero=" . $return_rand);