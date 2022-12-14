<?php

namespace controllers;

use core\Controller;
use core\Core;

class MainController extends Controller
{
    public function indexAction() {
        return $this->render();
    }
    public function errorAction($code) {
        switch ($code) {
            case 404:
                return $this->render('views/main/error.php');
                break;
        }
    }
}