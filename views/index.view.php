<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Job">

    <title>задачи</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/datatables.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
</head>

<body class="bg-light">

<div class="container bg-white shadow" style="min-height: 700px;">
    <div class="row">
        <div class="col-md-12 text-center">
           <span class="h1 text-center text-success text-uppercase"> Tasks </span>

            <a  href="/admin">
                <i class="fa fa-user float-right text-success m-3" style="font-size: 28px;" aria-hidden="true"></i>
            </a>
            <a href="/">
                <i class="fa fa-tasks float-right text-success m-3" style="font-size: 28px;" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <hr>

    <form method="POST" action="/tasks/add">
    <div class="row">

        <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя пользователя</label>
                <input type="text" class="form-control" name="user_name" id="exampleFormControlInput1" placeholder="Пользователь">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlInput1">email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="email">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlInput1">Название задачи</label>
                <input type="text" class="form-control" name="body" id="exampleFormControlInput1" placeholder="Название задачи">
            </div>
        </div>

        <div class="col-md-1">
            <br>
            <button class="btn btn-success" type="submit"> Добавить </button>
        </div>
    </div>
    </form>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped" id="ApplicationTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>email</th>
                    <th>Задача</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($tasks as $task) : ?>
                    <tr>
                        <td> <?= $task->id; ?></td>
                        <td> <?= $task->user_name; ?> </td>
                        <td> <?= $task->email; ?> </td>
                        <td> <?= $task->body; ?> </td>
                        <td> <?php if ($task->is_completed == 1):
                                echo "Решена";
                             else:
                                echo "Нерешена";
                             endif ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <ul class="pagination">
                <?php if ($currentPage != $startPage) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $startPage ?>" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">First</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ($currentPage != $endPage): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $endPage ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Last</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ($currentPage >= 2): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                <?php endif; ?>
                <li class="active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>

                <?php if ($currentPage != $endPage) : ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src="public/js/jquery-3.3.1.slim.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.js"></script>
<script src="public/js/datatables.js"></script>
<script src="public/js/app.js"></script>

</body>
</html>
