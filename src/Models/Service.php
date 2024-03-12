<?php

class Service
{
    private $id = null;
    private $complaint = null;
    private $pulse = null;
    private $temperature = null;
    private $saturation = null;
    private $weight = null;
    private $height = null;
    private $xRay = null;
    private $ultrasound = null;
    private $cerebrospinalFluid = null;
    private $blood = null;
    private $ecg = null;
    private $urine = null;
    private $ctScan = null;
    private $violenceSuspicion = null;
    private $medicalObservations = null;
    private $healthCenter = null;

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getComplaint()
    {
        return $this->complaint;
    }

    public function getPulse()
    {
        return $this->pulse;
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

    public function getXRay()
    {
        return $this->xRay;
    }

    public function getUltrasound()
    {
        return $this->ultrasound;
    }

    public function getCerebrospinalFluid()
    {
        return $this->cerebrospinalFluid;
    }

    public function getBlood()
    {
        return $this->blood;
    }

    public function getEcg()
    {
        return $this->ecg;
    }

    public function getUrine()
    {
        return $this->urine;
    }

    public function getCtScan()
    {
        return $this->ctScan;
    }

    public function getViolenceSuspicion()
    {
        return $this->violenceSuspicion;
    }

    public function getMedicalObservations()
    {
        return $this->medicalObservations;
    }

    public function getHealthCenter()
    {
        return $this->healthCenter;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setComplaint($complaint)
    {
        $this->complaint = $complaint;
    }

    public function setPulse($pulse)
    {
        $this->pulse = $pulse;
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

    public function setXRay($xRay)
    {
        $this->xRay = $xRay;
    }

    public function setUltrasound($ultrasound)
    {
        $this->ultrasound = $ultrasound;
    }

    public function setCerebrospinalFluid($cerebrospinalFluid)
    {
        $this->cerebrospinalFluid = $cerebrospinalFluid;
    }

    public function setBlood($blood)
    {
        $this->blood = $blood;
    }

    public function setEcg($ecg)
    {
        $this->ecg = $ecg;
    }

    public function setUrine($urine)
    {
        $this->urine = $urine;
    }

    public function setCtScan($ctScan)
    {
        $this->ctScan = $ctScan;
    }

    public function setViolenceSuspicion($violenceSuspicion)
    {
        $this->violenceSuspicion = $violenceSuspicion;
    }

    public function setMedicalObservations($medicalObservations)
    {
        $this->medicalObservations = $medicalObservations;
    }

    public function setHealthCenter($healthCenter)
    {
        $this->healthCenter = $healthCenter;
    }
}
