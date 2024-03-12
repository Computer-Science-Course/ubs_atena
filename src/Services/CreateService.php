<?php
session_start();
require_once('../../../public/utils/index.php');
check_sessions();

include_once('../Controllers/ServiceController.php');
include_once('../Controllers/UserController.php');
include_once('../Models/Service.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $complaint = $_POST['complaint'] ?? '';
    $pulse = $_POST['pulse'] ?? '';
    $temperature = $_POST['temperature'] ?? '';
    $saturation = $_POST['saturation'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $height = $_POST['height'] ?? '';
    $x_ray = isset($_POST['x-ray']) ? 1 : 0;
    $ultrasound = isset($_POST['ultrasound']) ? 1 : 0;
    $cerebrospinal_fluid = isset($_POST['cerebrospinal-fluid']) ? 1 : 0;
    $blood = isset($_POST['blood']) ? 1 : 0;
    $ecg = isset($_POST['ecg']) ? 1 : 0;
    $urine = isset($_POST['urine']) ? 1 : 0;
    $ct_scan = isset($_POST['ct-scan']) ? 1 : 0;
    $violence_suspicion = isset($_POST['violence-suspicion']) ? 1 : 0;
    $medical_observations = $_POST['medical-observations'] ?? '';
    $health_center = $_POST['health-center'] ?? '';

    // Cria uma instância do Service
    $service = new Service(
        null,
        $complaint,
        $pulse,
        $temperature,
        $saturation,
        $weight,
        $height,
        $x_ray,
        $ultrasound,
        $cerebrospinal_fluid,
        $blood,
        $ecg,
        $urine,
        $ct_scan,
        $violence_suspicion,
        $medical_observations,
        $health_center
    );

    // Cria uma instância do ServiceController
    $service_controller = new ServiceController();

    // Chama o método create para adicionar o novo atendimento
    $service_id = $service_controller->create($service);

    // Redireciona para a página desejada após a criação do atendimento
    header('Location: ../Views/Service/index.php');
    die();
}
?>
