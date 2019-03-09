<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Job">

    <title>Admin</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/datatables.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
</head>

<body class="bg-light">

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-striped" id="ApplicationTable">
            <thead>
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>email</th>
                <th>Статус</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($tasks as $task) : ?>
                <tr>
                    <td> <?= $task->id; ?></td>
                    <td> <?= $task->user_name; ?> </td>
                    <td> <?= $task->body; ?> </td>
                    <td> <?php if ($task->is_completed == 1):
                            echo "<input type='checkbox' value='$tasks->is_complete'> </input>";
                        else:
                            echo "<input type='checkbox' value='$tasks->is_complete'> </input>";
                        endif ?></td>
                    <td>
                        <a href="delete/<?= $task->id; ?>">
                            <button class="btn btn-danger"> Удалить </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

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
