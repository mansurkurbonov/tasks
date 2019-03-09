<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array
     */
    public function selectAllUsers()
    {
        $statement = $this->pdo->prepare("SELECT *  FROM `users`");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    /**
     * @param $table
     * @return array
     */
    public function allCount($table)
    {
        $statement = $this->pdo->prepare("select COUNT(*) from {$table}");
        $statement->execute();

        return $statement->fetch(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @return array
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @param $start
     * @param $limit
     * @return array
     */
    public function paginate($table, $start, $limit)
    {
        $statement = $this->pdo->prepare("select * from {$table} limit {$start}, {$limit}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @param $parameters
     * @throws Exception
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * @param $table
     * @param $deletableId
     * @throws Exception
     */
    public function deleteById($table, $deletableId)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE id = %s;',
            $table,
            $deletableId
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
