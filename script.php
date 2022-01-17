<?php

$one = $_POST["one"];
$two = $_POST["two"];

$random = rand($one, $two);

echo "Votre nombre aléatoire entre $one et $two est ". $random;