<?php
class MedicalHistory
{
    private $id = null;
    private $general_sheet_id = null;
    private $complaint = null;
    private $pulser = null;
    private $temperature = null;
    private $saturation = null;
    private $weight = null;
    private $height = null;
    private $raiox = null;
    private $ultrassom = null;
    private $liquor = null;
    private $blood = null;
    private $egg = null;
    private $urine = null;
    private $tc = null;
    private $clinical_data = null;
    private $diagnosis = null;
    private $unit_observation = null;
    private $transfer_to_unit = null;
    private $susp_violence_mistr = null;
    private $risk_class = null;
    private $exit_time = null;

    public function __construct(
        $id = null,
        $general_sheet_id = null,
        $complaint = null,
        $pulser = null,
        $temperature = null,
        $saturation = null,
        $weight = null,
        $height = null,
        $raiox = null,
        $ultrassom = null,
        $liquor = null,
        $blood = null,
        $egg = null,
        $urine = null,
        $tc = null,
        $clinical_data = null,
        $diagnosis = null,
        $unit_observation = null,
        $transfer_to_unit = null,
        $susp_violence_mistr = null,
        $risk_class = null,
        $exit_time = null,
    ) {
        $this->id = $id;
        $this->general_sheet_id = $general_sheet_id;
        $this->complaint = $complaint;
        $this->pulser = $pulser;
        $this->temperature = $temperature;
        $this->saturation = $saturation;
        $this->weight = $weight;
        $this->height = $height;
        $this->raiox = $raiox;
        $this->ultrassom = $ultrassom;
        $this->liquor = $liquor;
        $this->blood = $blood;
        $this->egg = $egg;
        $this->urine = $urine;
        $this->tc = $tc;
        $this->clinical_data = $clinical_data;
        $this->diagnosis = $diagnosis;
        $this->unit_observation = $unit_observation;
        $this->transfer_to_unit = $transfer_to_unit;
        $this->susp_violence_mistr = $susp_violence_mistr;
        $this->risk_class = $risk_class;
        $this->exit_time = $exit_time;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getGeneralSheetId()
    {
        return $this->general_sheet_id;
    }
    public function getComplaint()
    {
        return $this->complaint;
    }
    public function getPulser()
    {
        return $this->pulser;
    }
    public function getTemperature()
    {
        return $this->temperature;
    }
    public function getSaturation()
    {
        return $this->saturation;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getRaiox()
    {
        return $this->raiox;
    }
    public function getUltrassom()
    {
        return $this->ultrassom;
    }
    public function getLiquor()
    {
        return $this->liquor;
    }
    public function getBlood()
    {
        return $this->blood;
    }
    public function getEgg()
    {
        return $this->egg;
    }
    public function getUrine()
    {
        return $this->urine;
    }
    public function getTc()
    {
        return $this->tc;
    }
    public function getClinicalData()
    {
        return $this->clinical_data;
    }
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }
    public function getUnitObservation()
    {
        return $this->unit_observation;
    }
    public function getTransferToUnit()
    {
        return $this->transfer_to_unit;
    }
    public function getSuspViolenceMistr()
    {
        return $this->susp_violence_mistr;
    }
    public function getRiskClass()
    {
        return $this->risk_class;
    }
    public function getExitTime()
    {
        return $this->exit_time;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setGeneralSheetId($general_sheet_id)
    {
        $this->general_sheet_id = $general_sheet_id;
    }
    public function setComplaint($complaint)
    {
        $this->complaint = $complaint;
    }
    public function setPulser($pulser)
    {
        $this->pulser = $pulser;
    }
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function setRaiox($raiox)
    {
        $this->raiox = $raiox;
    }
    public function setUltrassom($ultrassom)
    {
        $this->ultrassom = $ultrassom;
    }
    public function setLiquor($liquor)
    {
        $this->liquor = $liquor;
    }
    public function setBlood($blood)
    {
        $this->blood = $blood;
    }
    public function setEgg($egg)
    {
        $this->egg = $egg;
    }
    public function setUrine($urine)
    {
        $this->urine = $urine;
    }
    public function setTc($tc)
    {
        $this->tc = $tc;
    }
    public function setClinicalData($clinical_data)
    {
        $this->clinical_data = $clinical_data;
    }
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;
    }
    public function setUnitObservation($unit_observation)
    {
        $this->unit_observation = $unit_observation;
    }
    public function setTransferToUnit($transfer_to_unit)
    {
        $this->transfer_to_unit = $transfer_to_unit;
    }
    public function setSuspViolenceMistr($susp_violence_mistr)
    {
        $this->susp_violence_mistr = $susp_violence_mistr;
    }
    public function setRiskClass($risk_class)
    {
        $this->risk_class = $risk_class;
    }
    public function setExitTime($exit_time)
    {
        $this->exit_time = $exit_time;
    }
}