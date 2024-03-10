<?php
require_once('../../../public/utils/index.php');
check_sessions();
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
        <section class="custom-scrollbar">
            <form method="post" action="../../Controllers/PatientController.php">
                <div class="input-spacing">
                    <label for="patient-name" class="header">Nome paciente</label>
                    <input type="text" id="patient-name" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-birth-date" class="header">Data de Nascimento</label>
                    <input type="text" id="patient-birth-date" class="">
                </div>

                <!--Cada campo de preenchimento estará com a classe "input-spacing"-->
                <div class="input-spacing">
                    <label for="patient-gender" class="header">Gênero</label>
                    <input type="text" id="patient-gender" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-address" class="header">Endereço</label>
                    <input type="text" id="patient-address" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-phone" class="header">Telefone</label>
                    <input type="text" id="patient-phone" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-sus-card-number" class="header">Número cartão SUS</label>
                    <input type="text" id="patient-sus-card-number" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-email" class="header">E-mail</label>
                    <input type="text" id="patient-email" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-responsible" class="header">Responsável</label>
                    <input type="text" id="patient-responsible" class="">
                </div>

                <div class="input-spacing">
                    <label for="patient-parent" class="header">Pai/Mãe</label>
                    <input type="text" id="patient-parent" class="">
                </div>

                <!-- Quando type = "button" href vai -->
                <a href="index.php">
                    <input class="button-user" type="submit" value="SALVAR MODIFICAÇÕES">
                </a>

            </form>
        <section>
            

        </aside>
    </main>
</body>

</html>