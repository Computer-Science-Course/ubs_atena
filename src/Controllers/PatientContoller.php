<?php

include_once("../Controllers/DatabaseController.php");
include_once("../Models/Patient.php");


class PatientController
{
    private $TABLE = 'patient';

    public function create(Patient $patient)
    {
        $db = new DatabaseController();
        $patient_id = $db->create(
            $this->TABLE,
            'user_id, name, birth_date, gender, address, phone, sus_card_number, email, responsible, parent',
            '?, ?, ?, ?, ?, ?, ?, ?, ?, ?',
            'isssssssss',
            [
                $patient->getUserId(),
                $patient->getName(),
                $patient->getBirthDate(),
                $patient->getGender(),
                $patient->getAddress(),
                $patient->getPhone(),
                $patient->getSusCardNumber(),
                $patient->getEmail(),
                $patient->getResponsible(),
                $patient->getParent(),
            ]
        );

        return $patient_id;
    }

    /**
     * @return Patient[]
     */
    public function getAll(): array
    {
        $db = new DatabaseController();
        $patients = array();
        foreach ($db->getAll($this->TABLE) as $patient) {
            $patients[] = new Patient(
                id: $patient['id'],
                user_id: $patient['user_id'],
                name: $patient['name'],
                birth_date: $patient['birth_date'],
                gender: $patient['gender'],
                address: $patient['address'],
                phone: $patient['phone'],
                sus_card_number: $patient['sus_card_number'],
                email: $patient['email'],
                responsible: $patient['responsible'],
                parent: $patient['parent'],
            );
        }

        return $patients;
    }

    /**
     * @return Patient[]
     */
    public function getAllWhere($where, $equals): array
    {
        $db = new DatabaseController();
        $patients = array();
        foreach ($db->getAllWhere($this->TABLE, $where, $equals) as $patient) {
            $patients[] = new Patient(
                id: $patient['id'],
                user_id: $patient['user_id'],
                name: $patient['name'],
                birth_date: $patient['birth_date'],
                gender: $patient['gender'],
                address: $patient['address'],
                phone: $patient['phone'],
                sus_card_number: $patient['sus_card_number'],
                email: $patient['email'],
                responsible: $patient['responsible'],
                parent: $patient['parent'],
            );
        }

        return $patients;
    }

    public function updateAllWhere(Patient $patient, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            ['user_id', 'name', 'birth_date', 'gender', 'address', 'phone', 'sus_card_number', 'email', 'responsible', 'parent'],
            [
                $patient->getUserId(),
                $patient->getName(),
                $patient->getBirthDate(),
                $patient->getGender(),
                $patient->getAddress(),
                $patient->getPhone(),
                $patient->getSusCardNumber(),
                $patient->getEmail(),
                $patient->getResponsible(),
                $patient->getParent(),
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
