<?php

include_once("../Controllers/DatabaseController.php");
include_once("../Models/MedicalHistory.php");


class MedicalHistoryController
{
    private $TABLE = 'medical_history';

    public function create(MedicalHistory $medical_history)
    {
        $db = new DatabaseController();
        $medical_history_id = $db->create(
            $this->TABLE,
            'general_sheet_id, complaint, pulser, temperature, saturation, weight, height, raiox, ultrassom, liquor, blood, egg, urine, tc, clinical_data, diagnosis, unit_observation, transfer_to_unit, susp_violence_mistr, risk_class, exit_time',
            '?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?',
            'isiddddiiiiiiissssiss',
            [
                $medical_history->getGeneralSheetId(),
                $medical_history->getComplaint(),
                $medical_history->getPulser(),
                $medical_history->getTemperature(),
                $medical_history->getSaturation(),
                $medical_history->getWeight(),
                $medical_history->getHeight(),
                $medical_history->getRaiox(),
                $medical_history->getUltrassom(),
                $medical_history->getLiquor(),
                $medical_history->getBlood(),
                $medical_history->getEgg(),
                $medical_history->getUrine(),
                $medical_history->getTc(),
                $medical_history->getClinicalData(),
                $medical_history->getDiagnosis(),
                $medical_history->getUnitObservation(),
                $medical_history->getTransferToUnit(),
                $medical_history->getSuspViolenceMistr(),
                $medical_history->getRiskClass(),
                $medical_history->getExitTime(),
            ]
        );

        return $medical_history_id;
    }

    /**
     * @return MedicalHistory[]
     */
    public function getAll(): array
    {
        $db = new DatabaseController();
        $medical_historys = array();
        foreach ($db->getAll($this->TABLE) as $medical_history) {
            $medical_historys[] = new MedicalHistory(
                id: $medical_history['id'],
                general_sheet_id: $medical_history['general_sheet_id'],
                complaint: $medical_history['complaint'],
                pulser: $medical_history['pulser'],
                temperature: $medical_history['temperature'],
                saturation: $medical_history['saturation'],
                weight: $medical_history['weight'],
                height: $medical_history['height'],
                raiox: $medical_history['raiox'],
                ultrassom: $medical_history['ultrassom'],
                liquor: $medical_history['liquor'],
                blood: $medical_history['blood'],
                egg: $medical_history['egg'],
                urine: $medical_history['urine'],
                tc: $medical_history['tc'],
                clinical_data: $medical_history['clinical_data'],
                diagnosis: $medical_history['diagnosis'],
                unit_observation: $medical_history['unit_observation'],
                transfer_to_unit: $medical_history['transfer_to_unit'],
                susp_violence_mistr: $medical_history['susp_violence_mistr'],
                risk_class: $medical_history['risk_class'],
                exit_time: $medical_history['exit_time'],
            );
        }

        return $medical_historys;
    }

    /**
     * @return MedicalHistory[]
     */
    public function getAllWhere($where, $equals): array
    {
        $db = new DatabaseController();
        $medical_historys = array();
        foreach ($db->getAllWhere($this->TABLE, $where, $equals) as $medical_history) {
            $medical_historys[] = new MedicalHistory(
                id: $medical_history['id'],
                general_sheet_id: $medical_history['general_sheet_id'],
                complaint: $medical_history['complaint'],
                pulser: $medical_history['pulser'],
                temperature: $medical_history['temperature'],
                saturation: $medical_history['saturation'],
                weight: $medical_history['weight'],
                height: $medical_history['height'],
                raiox: $medical_history['raiox'],
                ultrassom: $medical_history['ultrassom'],
                liquor: $medical_history['liquor'],
                blood: $medical_history['blood'],
                egg: $medical_history['egg'],
                urine: $medical_history['urine'],
                tc: $medical_history['tc'],
                clinical_data: $medical_history['clinical_data'],
                diagnosis: $medical_history['diagnosis'],
                unit_observation: $medical_history['unit_observation'],
                transfer_to_unit: $medical_history['transfer_to_unit'],
                susp_violence_mistr: $medical_history['susp_violence_mistr'],
                risk_class: $medical_history['risk_class'],
                exit_time: $medical_history['exit_time'],
            );
        }

        return $medical_historys;
    }

    public function updateAllWhere(MedicalHistory $medical_history, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            ['general_sheet_id', 'complaint', 'pulser', 'temperature', 'saturation', 'weight', 'height', 'raiox', 'ultrassom', 'liquor', 'blood', 'egg', 'urine', 'tc', 'clinical_data', 'diagnosis', 'unit_observation', 'transfer_to_unit', 'susp_violence_mistr', 'risk_class', 'exit_time'],
            [
                $medical_history->getGeneralSheetId(),
                $medical_history->getComplaint(),
                $medical_history->getPulser(),
                $medical_history->getTemperature(),
                $medical_history->getSaturation(),
                $medical_history->getWeight(),
                $medical_history->getHeight(),
                $medical_history->getRaiox(),
                $medical_history->getUltrassom(),
                $medical_history->getLiquor(),
                $medical_history->getBlood(),
                $medical_history->getEgg(),
                $medical_history->getUrine(),
                $medical_history->getTc(),
                $medical_history->getClinicalData(),
                $medical_history->getDiagnosis(),
                $medical_history->getUnitObservation(),
                $medical_history->getTransferToUnit(),
                $medical_history->getSuspViolenceMistr(),
                $medical_history->getRiskClass(),
                $medical_history->getExitTime(),
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
