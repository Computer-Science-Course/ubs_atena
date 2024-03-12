<?php
session_start();
include_once('../Controllers/PatientController.php');

$patient_id = $_GET['patient_id'];

$patientController = new PatientController();

$patientController->deleteAllWhere('id', $patient_id);

header('Location: ../Views/Pacient/index.php');
?>