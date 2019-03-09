 <?php
 //$router->get('', 'AdminController@index');
 $router->post('loginCheck', 'AuthController@login');
 $router->get('login', 'AuthController@index');
 $router->get('logout', 'AuthController@logout');
$router->get('', 'TaskController@index');

$router->post('tasks/add', 'TaskController@store');
 $router->post('tasks/update/{id}', 'TaskController@update');
$router->get('tasks/delete/{id}', 'TaskController@delete');

 $router->get('admin', 'AdminController@index');
//$router->get('user', 'UserController@index');
//$router->post('addNewUser', 'UserController@addNewUser');
//$router->get('delete/{id}', 'UserController@delete');
