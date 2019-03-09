<?php

namespace App\Controllers;

use App\Core\App;

class UserController
{

    /**
     * @return mixed
     */
    public function index()
    {
        $users = App::get('database')->selectAllUsers();

        return view('user',compact('users'));
    }

    public function addNewUser()
    {
        App::get('database')->insert('users', [
            'full_name'       => $_POST['name'],
            'email'           => $_POST['email'],
            'login'           => $_POST['login'],
            'password'        => $_POST['pass']
        ]);

    }


    public function delete($id)
    {
        $user_id = (int)str_replace(' ', '', $id["id"]);
        App::get('database')->delete('users', $user_id);
    }

}