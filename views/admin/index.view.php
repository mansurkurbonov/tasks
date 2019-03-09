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

            <a  href="/logout">
                <i class="fa fa-sign-out fa-q float-right text-success m-3" style="font-size: 28px;" aria-hidden="true"></i>
            </a>
            <a href="/">
                <i class="fa fa-tasks float-right text-success m-3" style="font-size: 28px;" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped" id="ApplicationTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Задача</th>
                    <th>Статус</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($tasks as $task) : ?>
                    <tr>
                        <td> <?= $task->id; ?></td>
                        <td> <?= $task->user_name; ?> </td>
                        <td> <?= $task->body; ?> </td>
                        <td> <?php if ($task->is_completed == 1): ?>
                            <form method="POST" action="/tasks/update/<?= $task->id ?>">
                                <button class="btn btn-success" type="submit">решена</button>
                            </form>
                            <?php else: ?>
                                <form method="POST" action="/tasks/update/<?= $task->id ?>">
                                    <button class="btn btn-danger" type="submit"> нерешена </button>
                                </form>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

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
