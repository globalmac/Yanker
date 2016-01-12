<?php

abstract class Core
{

    public $design, $yanker, $security, $categories = [];

    public function __construct()
    {
        // Initialise the views & main Core Helpers
        $this->design = new StdClass();
        $this->site_title = 'Blog';

        //$this->yanker = new Yanker();
        //$this->categories_header = $this->yanker->getAllCategories();

    }

    public function template($path, $inc = true)
    {
        if ($inc) {
            require_once(ROOT_PATH . '/app/templates/header.php');
            require_once(ROOT_PATH . '/app/templates/' . $path . '.php');
            require_once(ROOT_PATH . '/app/templates/footer.php');
        } else {
            require_once(ROOT_PATH . '/app/templates/' . $path . '.php');
        }

    }


}
