<?php

namespace Controllers;

class HomeController
{
    public function index()
    {
        require_once (__DIR__ . '../views/home/index.php');
    }
    public function dashboard()
    {
        require_once (__DIR__ . '../views/home/dashboard.php');
    }
}