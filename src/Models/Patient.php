<?php
class Patient
{
    private $id = null;
    private $user_id = null;
    private $name = null;
    private $birth_date = null;
    private $gender = null;
    private $address = null;
    private $phone = null;
    private $sus_card_number = null;
    private $email = null;
    private $responsible = null;
    private $parent = null;

    public function __construct(
        $id = null,
        $user_id = null,
        $name = null,
        $birth_date = null,
        $gender = null,
        $address = null,
        $phone = null,
        $sus_card_number = null,
        $email = null,
        $responsible = null,
        $parent = null,
    ) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->name = $name;
        $this->birth_date = $birth_date;
        $this->gender = $gender;
        $this->address = $address;
        $this->phone = $phone;
        $this->sus_card_number = $sus_card_number;
        $this->email = $email;
        $this->responsible = $responsible;
        $this->parent = $parent;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getBirthDate()
    {
        return $this->birth_date;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getSusCardNumber()
    {
        return $this->sus_card_number;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getResponsible()
    {
        return $this->responsible;
    }
    public function getParent()
    {
        return $this->parent;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setSusCardNumber($sus_card_number)
    {
        $this->sus_card_number = $sus_card_number;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
    }
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
}