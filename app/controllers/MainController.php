<?php

namespace app\controllers;

use app\base\Controller;
use app\models\User;

class MainController extends Controller
{
    public $error = array();

    public function layout()
    {
        // light or dark
        $this->view->layout = 'light';
    }

    public function actionIndex()
    {
        $user = new User();
        $user->checkTable();

        // contact form
        if (!empty($_POST)) {
            if (!$this->model->contactValidate()) {
                $this->view->message('Error', $this->model->error);
            } else {
               $this->model->sendEmail();
            }
        }

        $this->view->render('Landing');
    }

    public function actionLogin()
    {
        if (!empty($_POST)) {
            $error = array();
            if ($this->model->emailValidate($_POST)) {
                $_SESSION['admin'] = true;
                header('Location: /admin');
                exit;
            } else {
                $error[] = 'Wrong login or password';
            }
        }

        // bad way, but at this point i don't know another solution
        if (empty($error)) {
            $this->view->render('Login');
        } else {
            $this->view->render('Login', $error);
        }
    }

    public function actionRegister()
    {
        if (!empty($_POST)) {
            $error = array();

            if (trim($_POST['login']) == '') {
                $error[] = 'Enter your login';
            }
            if (trim($_POST['email']) == '') {
                $error[] = 'Enter your email';
            }
            if ($_POST['password'] == '') {
                $error[] = 'Enter your password';
            }
            if ($_POST['password_2'] != $_POST['password']) {
                $error[] = 'Incorrect password';
            }

            if (empty($error)) {
                $user = new User();
                $user->addUser();
                header('Location: /login');
            }
        }

        // bad way, but at this point i don't know another solution
        if (empty($error)) {
            $this->view->render('Register');
        } else {
            $this->view->render('Register', $error);
        }
    }
}