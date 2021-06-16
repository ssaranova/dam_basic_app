<?php
require_once './includes/class/Database.php';
require_once './includes/class/User.dto.php';
class User extends Database
{
    private const TABLE = 'users';

    /**
     * Returns array of UserDto
     *
     * @return UserDto
     */
    public function getAllUsers()
    {
        $users = [];
        $res = $this->__read(self::TABLE) ?? [];
        foreach ($res as $data) {
            $users[] = new UserDto($data);
        }
        return $users;
    }

    /**
     * Save new user
     *
     * @param array $data
     * @return boolean
     */
    public function create($data = [])
    {
        $user = new UserDto($data);
        $userData = get_object_vars($user);
        $columns = sprintf("`%s`", implode("`, `", array_keys($userData)));
        $values = sprintf("'%s'", implode("', '", $userData));
        return $this->__create(self::TABLE, $columns, $values);
    }
}
