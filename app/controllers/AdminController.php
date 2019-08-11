<?php

namespace app\controllers;

use app\base\Controller;

class AdminController extends Controller
{
    public function layout()
    {
        $this->view->layout = 'admin';
    }

    public function actionIndex()
    {
        $this->view->render('Admin page');
    }

    public function actionLogout()
    {
        unset($_SESSION['admin']);
        header('Location: /');
    }


}