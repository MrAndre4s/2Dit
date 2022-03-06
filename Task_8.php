<?php

$array = array();

print('Старый массив ');
for ($i = 0; $i < 20; $i++) {
    $array[$i] = rand(-20, 20);
    print("$array[$i] ");
}

$max = max($array);
$maxKey = array_search($max, $array);

$min = min($array);
$minKey = array_search($min, $array);

$array[$maxKey] = $min;
$array[$minKey] = $max;

echo '<br>';
print('Новый массив ');
foreach ($array as $item) {
    print("$item ");
}