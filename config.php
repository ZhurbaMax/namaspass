<?php
// получаем все наши use в $myClass
//в нашем случае получаем $myClass = app\Classes\ClassOne, $myClass = app\Classes\Two\ClassTwo
spl_autoload_register(function ($myClass) {

    //формируем путь подключения наших файлов классов
    //меняем у $myClass = app\Classes\ClassOne, $myClass = app\Classes\Two\ClassTwo '\' на '/'
    // и добавляем в конце .php
    //чем формируем подключения файлов $path = app/Classes/ClassOne.php и $path = app/Classes/Two/ClassTwo.php

    $path = str_replace('\\', '/', $myClass . '.php');
    //Проверяем сушествует ли файл и если да то подключаем его require $path;
    if (file_exists($path)){
        require $path;
    }
});

