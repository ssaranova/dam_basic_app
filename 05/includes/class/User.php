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
     * Get user by ID
     *
     * @param number $id
     * @return boolean|UserDto
     */
    public function getById($id)
    {
        $result = $this->__read(self::TABLE, "id=$id", true);
        if (empty($result)) {
            return false;
        }
        return new UserDto($result);
    }

    /**
     * Delete current user
     *
     * @param UserDto|boolean $user
     * @return boolean
     */
    public function delete($user)
    {
        if (!$user instanceof UserDto) {
            return false;
        }
        return $this->__delete(self::TABLE, "WHERE id=" . $user->getId());
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
