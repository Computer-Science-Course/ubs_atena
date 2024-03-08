<?php
class GeneralSheet
{
    private $id = null;
    private $patient_id = null;
    private $user_id = null;
    private $creation_date = null;
    private $doctor_responsible = null;

    public function __construct(
        $id = null,
        $patient_id = null,
        $user_id = null,
        $creation_date = null,
        $doctor_responsible = null,
    ) {
        $this->id = $id;
        $this->patient_id = $patient_id;
        $this->user_id = $user_id;
        $this->creation_date = $creation_date;
        $this->doctor_responsible = $doctor_responsible;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getPatientId()
    {
        return $this->patient_id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getCreationDate()
    {
        return $this->creation_date;
    }
    public function getDoctorResponsible()
    {
        return $this->doctor_responsible;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPatientId($patient_id)
    {
        $this->patient_id = $patient_id;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }
    public function setDoctorResponsible($doctor_responsible)
    {
        $this->doctor_responsible = $doctor_responsible;
    }
}