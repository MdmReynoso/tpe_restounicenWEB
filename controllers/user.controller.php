<?php

include_once('views/user.view.php');
include_once('models/user.model.php');
include_once('helpers/auth.helper.php');

class UserController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    //funcion para mostrar registro
    public function showRegister()
    {
        $this->view->showRegister();
    }

    //funcion para registrar usuario
    public function registrar()
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if (!empty($user) && !empty($pass)) {
            $this->model->add($user, $pass);
            header("Location: " . BASE_URL . 'home');
        } else {
            $this->view->showRegister("User o Password incompleto");
        }
    }

    public function showLogin()
    {
        $this->view->showLogin();
    }


    public function verificar()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $user = $_POST['username'];

            $pass = $_POST['password'];


            $userDb = $this->model->getUserByUsername($user);

            //si coincide inicio sesion
            if (!empty($userDb) && password_verify($pass, $userDb->password)) {
                AuthHelper::login($userDb);
                header("Location: " . BASE_URL . 'admin');
            } else
                $this->view->showLogin("Login incorrecto, password o usuario incorrecto");
        } else {
            $this->view->showLogin("Login incompleto");
        }
    }

    //funcion para cerrar sesion.
    public function logout()
    {
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'login');
    }
}
