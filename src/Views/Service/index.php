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

    <title>Atendimeto</title>
</head>

<body>
    <!-- Menu -->
    <?php
    $is_service_active = 'active';
    $is_pacient_active = '';
    $is_user_active = '';
    include_once('../../../templates/menu/index.php');
    ?>
    <main id="container">
        <aside>
            <h1>Atendimento</h1>
        </aside>
        <aside class="container-right">
            <label for="pacient-name" class="header">Paciente</label>
            <div class="patient-info-container">
                <input type="text" id="pacient-name" class="" placeholder="Carteira do SUS ou nome do paciente">
                <label for="pacient-name">
                    <svg class="icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-search">
                        <circle cx="10" cy="7" r="4" />
                        <path d="M10.3 15H7a4 4 0 0 0-4 4v2" />
                        <circle cx="17" cy="17" r="3" />
                        <path d="m21 21-1.9-1.9" />
                    </svg>
                </label>
            </div>

            <br>

            <div class="patient-info-container">
                <button href="edit.php" class="box-button-icon <?php echo $is_user_active ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-plus-2">
                        <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4" />
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M3 15h6" />
                        <path d="M6 12v6" />
                    </svg>
                </button>

                <input class="input-bar-sus-number" value="679 6894 3467 5893" readonly>
                <input class="input-bar-patient-name" value="Fulano de tal" readonly>
            </div>

            <div class="button-user">
                 <a href="create.php">
                    <button>CADASTRAR NOVO PACIENTE</button>
                </a>
            </div>

        </aside>
    </main>
</body>

</html>