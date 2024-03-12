<?php
include_once(dirname(__DIR__) . "/Controllers/DatabaseController.php");
include_once(dirname(__DIR__) . "/Models/Service.php");

class ServiceController
{
    private $TABLE = 'service'; // Alterado para a tabela correta

    public function create(Service $service)
    {
        $db = new DatabaseController();
        $service_id = $db->create(
            $this->TABLE,
            'complaint, pulse, temperature, saturation, weight, height, xRay, ultrasound, cerebrospinalFluid, blood, ecg, urine, ctScan, violenceSuspicion, medicalObservations, healthCenter', // Ajustado para os campos corretos do serviço
            '?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?', // quantidade de parâmetros
            'ssssssssssssssss', // tipos de parâmetros
            [
                $service->getComplaint(),
                $service->getPulse(),
                $service->getTemperature(),
                $service->getSaturation(),
                $service->getWeight(),
                $service->getHeight(),
                $service->getXRay(),
                $service->getUltrasound(),
                $service->getCerebrospinalFluid(),
                $service->getBlood(),
                $service->getEcg(),
                $service->getUrine(),
                $service->getCtScan(),
                $service->getViolenceSuspicion(),
                $service->getMedicalObservations(),
                $service->getHealthCenter(),
            ]
        );

        return $service_id;
    }

    /**
     * Atualiza todos os serviços (atendimentos) que satisfazem a condição especificada.
     *
     * @param Service $service O serviço (atendimento) com os novos valores
     * @param string $where A condição WHERE
     * @param string $equals O valor a ser comparado
     */
    public function updateAllWhere(Service $service, string $where, string $equals)
    {
        $db = new DatabaseController();
        $db->updateAllWhere(
            $this->TABLE,
            [
                'complaint', 'pulse', 'temperature', 'saturation', 'weight', 'height', 'x-ray',
                'ultrasound', 'cerebrospinal-fluid', 'blood', 'ecg', 'urine', 'ct-scan',
                'violence-suspicion', 'medical-observations', 'health-center'
            ],
            [
                $service->getComplaint(),
                $service->getPulse(),
                $service->getTemperature(),
                $service->getSaturation(),
                $service->getWeight(),
                $service->getHeight(),
                $service->getXRay(),
                $service->getUltrasound(),
                $service->getCerebrospinalFluid(),
                $service->getBlood(),
                $service->getEcg(),
                $service->getUrine(),
                $service->getCtScan(),
                $service->getViolenceSuspicion(),
                $service->getMedicalObservations(),
                $service->getHealthCenter(),
            ],
            $where,
            $equals
        );
    }
}

