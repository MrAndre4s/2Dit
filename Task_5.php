<?php

$menu = array(
    array('name' => 'Главная', 'href' =>  'Task_1.php'),
    array('name' => 'Новости', 'href' =>  'Task_2.php'),
    array('name' => 'Каталог', 'href' =>  'Task_3.php'),
    array('name' => 'Блог', 'href' =>  'Task_4.php')
);

foreach ($menu as $item) {
    echo '<a href="'.$item['href'].'">'.$item['name'].'</a><br>';
}