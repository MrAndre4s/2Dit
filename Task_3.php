<?php

$age = 33;

if ($age < 18){
    print('ты способный парень, но тебе стоит немного подучиться');
} elseif (($age >= 18) and ($age < 55))  {
    print('тебе ещё работать и работать');
} else {
    print ('ну что ж, ты заслужил почётный отдых');
}