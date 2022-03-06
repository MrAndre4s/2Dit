<?php

$name = 'Andrew';
$age = '21';
$skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C#'];

$file = 'about.txt';

$string = $name . ' ' . $age . "\n";

foreach ($skills as $skill) {
    $string .= "$skill \n";
}

$result = file_put_contents($file, $string);

print('Файл созданы');