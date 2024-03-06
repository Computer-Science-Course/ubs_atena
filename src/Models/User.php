<?php
class User {
    private $id = null;
    private $name = null;
    private $username = null;
    private $password = null;
    private $cpf = null;
    private $phone = null;
    private $email = null;
    private $user_type = null;
    
    public function __construct(
        $id = null,
        $name = null,
        $username = null,
        $password = null,
        $cpf = null,
        $phone = null,
        $email = null,
        $user_type = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->email = $email;
        $this->user_type = $user_type;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUserType() {
        return $this->user_type;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUserType($user_type) {
        $this->user_type = $user_type;
    }
}
