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
    <title>Criar Paciente</title>
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
            <h1 class="header">Criar Paciente</h1>
        </aside>

        <aside>

            <form method="post" action="../../Services/CreatePatient.php">
                <section class="custom-scrollbar">
                    <div class="input-spacing">
                        <label for="patient-name" class="header">Nome paciente</label>
                        <input class="input-bar-primary" type="text" id="patient-name" name="name" required
                            autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-birth-date" class="header">Data de Nascimento</label>
                        <input class="input-bar-date" type="date" id="patient-birth-date" name="birth_date" required
                            autocomplete="off">
                    </div>

                    <!--Cada campo de preenchimento estará com a classe "input-spacing"-->
                    <div class="input-spacing">
                        <label for="patient-gender" class="header">Gênero</label>
                        <input class="input-bar-primary" type="text" id="patient-gender" name="gender" required
                            autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-address" class="header">Endereço</label>
                        <input class="input-bar-primary" type="text" id="patient-address" name="address" required
                            autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-phone" class="header">Telefone</label>
                        <input class="input-bar-primary" type="text" id="patient-phone" name="phone" required
                            autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-sus-card-number" class="header">Número cartão SUS</label>
                        <input class="input-bar-primary" type="text" id="patient-sus-card-number" name="sus_card_number"
                            required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-email" class="header">E-mail</label>
                        <input class="input-bar-primary" type="text" id="patient-email" name="email" required
                            autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-responsible" class="header">Responsável</label>
                        <input class="input-bar-primary" type="text" id="patient-responsible" name="responsible"
                            required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="patient-parent" class="header">Pai/Mãe</label>
                        <input class="input-bar-primary" type="text" id="patient-parent" name="parent" required
                            autocomplete="off">
                    </div>

                </section>

                <a>
                    <input class="button-user" type="submit" value="SALVAR PACIENTE">
                </a>
            </form>
        </aside>
    </main>
</body>

</html>