<?php
session_start();
include_once('../Controllers/PatientController.php');
include_once('../Controllers/UserController.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_id = $_SESSION['user_id'] ?? -1;
    $name = $_POST['name'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $sus_card_number = $_POST['sus_card_number'] ?? '';
    $email = $_POST['email'] ?? '';
    $responsible = $_POST['responsible'] ?? '';
    $parent = $_POST['parent'] ?? '';

    $pacient_controller = new PatientController();
    
    $existing_patient_sus = $pacient_controller->getAllWhere('sus_card_number', $sus_card_number);
    $existing_patient_email = $pacient_controller->getAllWhere('email', $email);

    if($existing_patient_sus && $existing_patient_email){
        echo "Dados repetidos: Número do Cartão do SUS e Email !!!";
    }else if($existing_patient_sus){
        echo "Dados repetidos: Número do Cartão do SUS !!!";
    }else if($existing_patient_email){
        echo "Dados repetidos: Email !!!";
    }else{
        $patient = new Patient(
            user_id: $user_id,
            name: $name,
            birth_date: $birth_date,
            gender: $gender,
            address: $address,
            phone: $phone,
            sus_card_number: $sus_card_number,
            email: $email,
            responsible: $responsible,
            parent: $parent
        );
    }

    $patient = $pacient_controller->create($patient);

    if ($patient) {
        echo "Paciente criado com sucesso. ID: " . $patient;
    } else {
        echo "Erro ao criar paciente.";
    }
}
?>