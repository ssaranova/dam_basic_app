<?php
require_once './includes/class/Database.php';
require_once './includes/class/User.dto.php';
class User extends Database
{
    private const TABLE = 'users';

    public function getAllUsers()
    {
        $users = [];
        $res = $this->__read(self::TABLE) ?? [];
        foreach($res as $data){
            $users[] = new UserDto($data);
        }
        return $users;
    }
}
