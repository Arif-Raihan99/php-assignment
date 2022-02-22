<?php


namespace App\classes;


class Home
{
    public function index(){
        session_start();
        $_SESSION['log']='signUp';
        header('Location: action.php?pages=signUp');
    }

    public function logOut(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        session_destroy();

        header('Location: action.php?pages=login');
    }
}