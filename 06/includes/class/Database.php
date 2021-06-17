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
     * @param boolean $unique
     * @return boolean|array
     */
    protected function __read($table, $where = '', $unique = false)
    {
        $query = 'SELECT * FROM ' . $table . (!empty($where) ? ' WHERE ' . $where : '');
        $sql = $this->executeQuery($query);

        if (!$sql || empty($sql->rowCount())) {
            return false;
        }

        return ($unique) ? $sql->fetch(PDO::FETCH_ASSOC) : $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Update register using query
     *
     * @param string $table
     * @param string $values
     * @param string $where
     * @return boolean
     */
    protected function __update($table, $values, $where)
    {
        $query = "UPDATE " . $table . " SET " . $values . " WHERE " . $where;
        return $this->executeQuery($query);
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
        return $this->executeQuery($query);
    }

    /**
     * Delete register using query
     *
     * @param string $table
     * @param string $filter
     * @return void
     */
    protected function __delete($table, $filter)
    {
        return $this->executeQuery("DELETE FROM " . $table . " " . $filter);
    }
}
