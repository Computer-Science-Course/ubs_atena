<?php
session_start();
include_once('../Controllers/PatientController.php');
$patient_id = $_GET['patient_id'];

// Metodo para salvar agora
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $patientController = new PatientController();

    $user_id_fk = $_POST['user_id'] ?? '';
    $name = $_POST['name'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'] ?? '';     
    $phone = $_POST['phone'] ?? '';
    $sus_card_number = $_POST['sus_card_number'] ?? '';
    $email = $_POST['email'] ?? '';
    $responsible = $_POST['responsible'] ?? '';
    $parent = $_POST['parent'] ?? '';

    $patient = new Patient(
        user_id: $user_id_fk,
        name: $name, 
        birth_date: $birth_date,
        gender: $gender, 
        address: $address,     
        phone: $phone,
        sus_card_number: $sus_card_number, 
        email: $email,
        responsible: $responsible, 
        parent: $parent, 
    );

    $patientController->updateAllWhere($patient, 'id', $patient_id);

    header('Location: ../Views/Pacient/index.php');
}
?>
