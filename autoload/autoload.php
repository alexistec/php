<?php

function app_autoloader($class){
    include 'class/'.$class.'.php';
}

spl_autoload_register('app_autoloader');