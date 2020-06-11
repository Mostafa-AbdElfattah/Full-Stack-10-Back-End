<?php

class Page
{
    public $pageName;

    public function home()
    {
        require_once 'pages/home.view.php';
    }

    public function create()
    {
        require_once 'pages/create.php';
    }

    public function read()
    {
  
        require_once  'pages/read.php';
    }

    public function update()
    {
        require_once 'pages/update.php';
    }

    public function delete()
    {
        require_once 'pages/delete.php';
    }

    public function __call($name, $arguments)
    {
        require_once 'pages/404.view.php';
    }
}