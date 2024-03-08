<?php
class Log
{
    private $id = null;
    private $date = null;
    private $user_id = null;
    private $action = null;
    private $table_id = null;
    private $object_id = null;

    public function __construct(
        $id = null,
        $date = null,
        $user_id = null,
        $action = null,
        $table_id = null,
        $object_id = null,
    ) {
        $this->id = $id;
        $this->date = $date;
        $this->user_id = $user_id;
        $this->action = $action;
        $this->table_id = $table_id;
        $this->object_id = $object_id;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function getTableId()
    {
        return $this->table_id;
    }
    public function getObjectId()
    {
        return $this->object_id;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setAction($action)
    {
        $this->action = $action;
    }
    public function setTableId($table_id)
    {
        $this->table_id = $table_id;
    }
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;
    }
}