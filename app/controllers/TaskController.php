<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Validate;
use App\Models\Task;
use Exception;

class TaskController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $limit = isset($_GET["limit"]) ? $_GET["limit"] : 3;
        $currentPage =  isset($_GET["page"]) ? $_GET["page"] : 1;
        $start = ($currentPage * $limit) - $limit;

        $tasks = Task::paginate($start, $limit);
        $count = count(Task::all());

        $endPage = ceil($count / $limit);
        $startPage = 1;
        $nextPage = $currentPage + 1;
        $previousPage = $currentPage - 1;

        return view('index',compact('tasks', 'endPage', 'startPage', 'nextPage', 'previousPage', 'currentPage', 'count'));
    }

    /**
     * @return string|void
     */
    public function store()
    {
        $userName = $_POST['user_name'];
        $body = $_POST['body'];
        $email = $_POST['email'];
        if ( $userName == "" || $email == "" ||  $body == "") {
            echo "не все поля введены :)";
            return "";
        }

        try {
            Validate::validate($email, "email");
        } catch (Exception $exception) {
            echo "email не валидный";
            return "";
        }
        Task::create([
            'user_name' => $userName,
            'body'      => $body,
            'email'     => $email
        ]);

        return redirect('');
    }

    /**
     * @param $params
     */
    public static function delete($params)
    {
        $taskId = (int)str_replace(' ', '', $params["id"]);
        App::get('database')->delete('tasks', $taskId);
    }

    /**
     * @param $params
     */
    public static function update($params)
    {
        $adminController = new AdminController();
        $adminController->checkAuth();

        $taskId = (int)str_replace(' ', '', $params["id"]);

        try {
            Task::updateComplete($taskId);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        return redirect('admin');
    }

}