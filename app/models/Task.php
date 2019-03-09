<?php
namespace App\Models;

use App\Core\App;
use App\Core\Database\Connection;
use Exception;

class Task
{
    const TABLE_NAME = "tasks";

    /**
     * @return mixed
     */
    public static function all()
    {
        $tasks = App::get('database')->selectAll(self::TABLE_NAME);
        return $tasks;
    }

    /**
     * @param $start
     * @param $limit
     * @return mixed
     */
    public static function paginate($start, $limit)
    {
        $tasks = App::get('database')->paginate(self::TABLE_NAME, $start, $limit);
        return $tasks;
    }

    /**
     * @return mixed
     */
    public static function allCount()
    {
        $count = App::get('database')->allCount(self::TABLE_NAME);
        return $count;
    }

    /**
     * @param $parameters
     */
    public static function create($parameters)
    {
        App::get('database')->insert(self::TABLE_NAME, $parameters);
    }

    /**
     * @param $id
     */
    public static function delete($id)
    {
        App::get('database')->delete(self::TABLE_NAME, $id);
    }

    /**
     * @param $id
     * @throws Exception
     */
    public static function updateComplete($id)
    {
        $connection = Connection::make(App::get('config')['database']);
        $sql = sprintf(
            'UPDATE %s SET `is_completed` = IF (`is_completed` = 1, 0, 1) WHERE `id` = %s',
            self::TABLE_NAME,
            $id
        );

        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }

    }
}