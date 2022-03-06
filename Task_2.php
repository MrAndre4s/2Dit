<?php

$name = 'Andrew';
$age = '21';
$skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C#'];

echo "Имя - $name <br>";
echo "Возраст - $age <br>";
echo "Навыки <br>";

foreach ($skills as $skill)  {
    echo "$skill <br>";
}