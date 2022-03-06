<?php

function ValueSearch(array $array, $value) {
    if (in_array($value, $array)){
        return "Массив содержит $value";
    } else {
        return "$value не найдено в массиве";
    }
}

$value = "three";

$arr = array("one", "two", "three");

print(ValueSearch($arr, $value));