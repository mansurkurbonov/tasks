<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('login');
    }

    /**
     * --
     */
    public function login()
    {
        if (!empty($_POST)) {
            $login = $_POST["login"];
            $password = $_POST["password"];

            if (isset($login) && isset($password)) {
                $user = (new User)->checkUser($login, $password);

                if (!empty($user)) {
                    $_SESSION["user_id"] = $user->id;
                    $_SESSION['login'] = $user->login;
                    redirect("admin");
                } else {
                    redirect("login");
                }
            }
        }
    }

    /**
     * --
     */
    public function logout()
    {
        unset($_SESSION["user_id"]);
        unset($_SESSION["login"]);
        session_destroy();
        redirect("");
    }
}