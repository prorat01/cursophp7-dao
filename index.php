<?php

require_once("config.php");

$renan = new Usuario();

$renan->loadbyId(4);

echo $renan;


?>