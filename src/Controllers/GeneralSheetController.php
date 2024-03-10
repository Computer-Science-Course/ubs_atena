<?php

include_once(dirname(__DIR__) . "/Controllers/DatabaseController.php");
include_once(dirname(__DIR__) . "/Models/GeneralSheet.php");


class GeneralSheetController
{
    private $TABLE = 'general_sheet';

    public function create(GeneralSheet $general_sheet)
    {
        $db = new DatabaseController();
        $general_sheet_id = $db->create(
            $this->TABLE,
            'patient_id, user_id, creation_date, doctor_responsible',
            '?, ?, ?, ?',
            'iiss',
            [
                $general_sheet->getPatientId(),
                $general_sheet->getUserId(),
                $general_sheet->getCreationDate(),
                $general_sheet->getDoctorResponsible(),
            ]
        );

        return $general_sheet_id;
    }

    /**
     * @return GeneralSheet[]
     */
    public function getAll(): array
    {
        $db = new DatabaseController();
        $general_sheets = array();
        foreach ($db->getAll($this->TABLE) as $general_sheet) {
            $general_sheets[] = new GeneralSheet(
                id: $general_sheet['id'],
                patient_id: $general_sheet['patient_id'],
                user_id: $general_sheet['user_id'],
                creation_date: $general_sheet['creation_date'],
                doctor_responsible: $general_sheet['doctor_responsible'],
            );
        }

        return $general_sheets;
    }

    /**
     * @return GeneralSheet[]
     */
    public function getAllWhere($where, $equals): array
    {
        $db = new DatabaseController();
        $general_sheets = array();
        foreach ($db->getAllWhere($this->TABLE, $where, $equals) as $general_sheet) {
            $general_sheets[] = new GeneralSheet(
                id: $general_sheet['id'],
                patient_id: $general_sheet['patient_id'],
                user_id: $general_sheet['user_id'],
                creation_date: $general_sheet['creation_date'],
                doctor_responsible: $general_sheet['doctor_responsible'],
            );
        }

        return $general_sheets;
    }

    public function updateAllWhere(GeneralSheet $general_sheet, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            ['patient_id', 'user_id', 'creation_date', 'doctor_responsible'],
            [
                $general_sheet->getPatientId(),
                $general_sheet->getUserId(),
                $general_sheet->getCreationDate(),
                $general_sheet->getDoctorResponsible(),
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
