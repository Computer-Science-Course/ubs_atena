<?php

include_once("../Controllers/DatabaseController.php");
include_once("../Models/User.php");


class UserController
{
    private $TABLE = 'user';

    public function create(User $user)
    {
        $db = new DatabaseController();
        $user_id = $db->create(
            $this->TABLE,
            'name, username, password, cpf, phone, email, user_type',
            "?, ?, ?, ?, ?, ?, ?",
            "sssssss",
            [
                $user->getName(),
                $user->getUsername(),
                $user->getPassword(),
                $user->getCpf(),
                $user->getPhone(),
                $user->getEmail(),
                $user->getUserType(),
            ]
        );

        return $user_id;
    }

    public function getAll()
    {
        $db = new DatabaseController();
        $users = array();
        foreach ($db->getAll($this->TABLE) as $user) {
            $users[] = new User(
                id: $user['id'],
                name: $user['name'],
                username: $user['username'],
                password: $user['password'],
                cpf: $user['cpf'],
                phone: $user['phone'],
                email: $user['email'],
                user_type: $user['user_type'],
            );
        }

        return $users;
    }

    /**
     * @return User[]
     */
    public function getAllWhere($where, $equals): array
    {
        $db = new DatabaseController();
        $users = array();
        foreach ($db->getAllWhere($this->TABLE, $where, $equals) as $user) {
            $users[] = new User(
                id: $user['id'],
                name: $user['name'],
                username: $user['username'],
                password: $user['password'],
                cpf: $user['cpf'],
                phone: $user['phone'],
                email: $user['email'],
                user_type: $user['user_type'],
            );
        }

        return $users;
    }

    public function updateAllWhere(User $user, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            ["name", "username", "password", "cpf", "phone", "email", "user_type"],
            [
                $user->getName(),
                $user->getUsername(),
                $user->getPassword(),
                $user->getCpf(),
                $user->getPhone(),
                $user->getEmail(),
                $user->getUserType(),
            ],
            $where,
            $equals,
        );
    }

    public function deleteAllWhere($where, $equals)
    {
        $db = new DatabaseController();
        $db->deleteAllWhere($this->TABLE, $where, $equals);
    }
}
