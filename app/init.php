<?php

// utk nge-load otomasis semua file di folder Core. bukan satu2
spl_autoload_register(function($class){
    require_once 'Core/' . $class . '.php';
});