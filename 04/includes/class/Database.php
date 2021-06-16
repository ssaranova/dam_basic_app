<?php
class Database
{
    private const DDBB_HOST = 'localhost';
    private const DDBB_USER = 'root';
    private const DDBB_PASSWORD = '';
    private const DDBB_NAME = 'dam_daw';

    private $conn;

    /**
     * Returns database connection
     */
    function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new PDO('mysql:host=' . self::DDBB_HOST . ';dbname=' . self::DDBB_NAME, self::DDBB_USER, self::DDBB_PASSWORD);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    /**
     * Execute current query
     *
     * @param string $query
     * @return object|boolean
     */
    private function executeQuery($query)
    {
        try {
            return $this->conn->query($query);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get all registers using query
     *
     * @param string $table
     * @param string $where
     * @return boolean|array
     */
    protected function __read($table, $where = '')
    {
        $query = 'SELECT * FROM ' . $table . (!empty($where) ? ' WHERE ' . $where : '');
        $sql = $this->executeQuery($query);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Create register using query
     *
     * @param string $table
     * @param string $columns
     * @param string $values
     * @return boolean
     */
    protected function __create($table, $columns, $values)
    {
        $query = 'INSERT INTO ' . $table . ' (' . $columns . ') VALUES (' . $values . ')';
        var_dump($query);
        die;
        return $this->executeQuery($query);
    }
}
