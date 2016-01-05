<?php

require_once(__DIR__ . '/app/config.ini.php');

// Autoloading init
spl_autoload_register(function ($class) {
    require_once(ROOT_PATH . '/app/' . str_replace('\\', '/', $class) . '.php');
});

ob_start();

// Routes
Router::get('/', 'Blog@home');
Router::get('/(:date)/(:any)/', 'Blog@article');
Router::get('/category/(:any)/', 'Blog@category');
Router::get('/tag/(:any)/', 'Blog@tag');
Router::get('/posts/', 'Blog@posts');

Router::error('Blog@error404');
Router::dispatch();

ob_end_flush();