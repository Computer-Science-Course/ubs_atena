<?php

include_once("../Controllers/DatabaseController.php");
include_once("../Models/Log.php");


class LogController
{
    private $TABLE = 'log';

    public function create(Log $log)
    {
        $db = new DatabaseController();
        $log_id = $db->create(
            $this->TABLE,
            'date, user_id, action, table_id, object_id',
            '?, ?, ?, ?, ?',
            'sisii',
            [
                $log->getDate(),
                $log->getUserId(),
                $log->getAction(),
                $log->getTableId(),
                $log->getObjectId(),
            ]
        );

        return $log_id;
    }

    /**
     * @return Log[]
     */
    public function getAll(): array
    {
        $db = new DatabaseController();
        $logs = array();
        foreach ($db->getAll($this->TABLE) as $log) {
            $logs[] = new Log(
                id: $log['id'],
                date: $log['date'],
                user_id: $log['user_id'],
                action: $log['action'],
                table_id: $log['table_id'],
                object_id: $log['object_id'],
            );
        }

        return $logs;
    }

    /**
     * @return Log[]
     */
    public function getAllWhere($where, $equals): array
    {
        $db = new DatabaseController();
        $logs = array();
        foreach ($db->getAllWhere($this->TABLE, $where, $equals) as $log) {
            $logs[] = new Log(
                id: $log['id'],
                date: $log['date'],
                user_id: $log['user_id'],
                action: $log['action'],
                table_id: $log['table_id'],
                object_id: $log['object_id'],
            );
        }

        return $logs;
    }

    public function updateAllWhere(Log $log, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            ['date', 'user_id', 'action', 'table_id', 'object_id'],
            [
                $log->getDate(),
                $log->getUserId(),
                $log->getAction(),
                $log->getTableId(),
                $log->getObjectId(),
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
