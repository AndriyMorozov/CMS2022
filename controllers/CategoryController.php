<?php

namespace controllers;

use core\Controller;
use core\Core;
use models\Category;
use models\User;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $rows = Category::getCategories();
        $viewPath = null;
        if (User::isAdmin())
            $viewPath = "views/category/index-admin.php";
        return $this->render($viewPath,
            [
                'rows' => $rows
            ]);
    }

    public function addAction()
    {
        if (!User::isAdmin())
            return $this->error(403);
        if (Core::getInstance()->requestMethod === 'POST') {
            Category::addCategory($_POST['name'], $_FILES['file']['tmp_name']);
            return $this->redirect('/category/index');
        }
        return $this->render();
    }
}