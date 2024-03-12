<?php
require_once('../../../public/utils/index.php');
check_sessions();

//=======
require_once('../../Controllers/PatientController.php');

$patient_id = $_GET['patient_id'];

$patientController = new PatientController();

$patient_final = $patientController->getAllWhere('id', $patient_id);

// Verifique se há dados retornados
if ($patient_final) {
    foreach ($patient_final as $patient) {
        $user_id = $patient->getUserId();
        $name = $patient->getName();
        $birth_date = $patient->getBirthDate();
        $gender = $patient->getGender();
        $address = $patient->getAddress();    
        $phone = $patient->getPhone();
        $sus_card_number = $patient->getSusCardNumber();
        $email = $patient->getEmail();
        $responsible =  $patient->getResponsible();
        $parent = $patient->getParent();
        
    }
} else {
    echo "Erro em encontrar usuário.";
}

//=======

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/global.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="./style.css">

    <title>Editar Paciente</title>
</head>

<body>
    <!-- Menu -->
    <?php
    $is_service_active = '';
    $is_pacient_active = 'active';
    $is_user_active = '';
    include_once('../../../templates/menu/index.php');
    ?>
    <main id="container">
        <aside>
            <h1 class="header">Editar Paciente</h1>
        </aside>
        <aside class="container-right">
        
            <form method="post" action="../../Services/EditPatient.php?patient_id=<?php echo $patient->getId()?>">
                <section class="custom-scrollbar">    
                    <div class="input-spacing">
                        <label for="name" class="header">Nome paciente</label>
                        <input name="name" value="<?php echo $name?>" type="text" id="patient-name" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="birth_date" class="header">Data de Nascimento</label>
                        <input name="birth_date" value="<?php echo $birth_date?>" type="text" id="patient-birth-date" required autocomplete="off">
                    </div>

                    <!--Cada campo de preenchimento estará com a classe "input-spacing"-->
                    <div class="input-spacing">
                        <label for="gender" class="header">Gênero</label>
                        <input name="gender" value="<?php echo $gender?>" type="text" id="patient-gender" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="address" class="header">Endereço</label>
                        <input name="address" value="<?php echo $address?>" type="text" id="patient-address" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="phone" class="header">Telefone</label>
                        <input name="phone" value="<?php echo $phone?>" type="text" id="patient-phone" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="sus_card_number" class="header">Número cartão SUS</label>
                        <input name="sus_card_number" value="<?php echo $sus_card_number?>" type="text" id="patient-sus-card-number" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="email" class="header">E-mail</label>
                        <input name="email" value="<?php echo $email?>" type="text" id="patient-email" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="responsible" class="header">Responsável</label>
                        <input name="responsible" value="<?php echo $responsible?>" type="text" id="patient-responsible" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="parent" class="header">Pai/Mãe</label>
                        <input name="parent" value="<?php echo $parent?>" type="text" id="patient-parent" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="user_id" class="header">ID do Usuário</label>
                        <input name="user_id" value="<?php echo $user_id?>" type="text" id="patient-parent"  readonly autocomplete="off">
                    </div>

                <section>

                <input class="button-user" type="submit" value="SALVAR MODIFICAÇÕES">
                
            </form>
        </aside>
    </main>
</body>

</html>