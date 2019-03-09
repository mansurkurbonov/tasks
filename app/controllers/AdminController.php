<?php

namespace App\Controllers;

use App\Models\Task;

class AdminController
{
    /**
     * AdminController constructor.
     */
    function __construct()
    {
        $this->checkAuth();
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin/index',compact('tasks'));
    }

    /**
     * --
     */
    public function checkAuth()
    {
        if (!isset($_SESSION['user_id'])) {
            redirect("login");
            exit("not auth!)");
        }
    }
}