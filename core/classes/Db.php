<?php



class Db
{
    private $connection;
    private $stmt;
    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['db']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['user'], $db_config['pass'], $db_config['options']);
        } catch (PDOException $e) {
            abort(500);
        }
    }

    public function query($query, array $params = [])
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }

    public function findOrFail()
    {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }

}