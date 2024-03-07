<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/global.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/buttons.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Paciente</title>
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
            <h1 class="header">Paciente</h1>
        </aside>
        <aside class="container-right">
            <label for="pacient-name" class="header">Paciente</label>
            <div class="patient-info-container">
                <input type="text" id="pacient-name" class="" placeholder="Carteira do SUS ou nome do paciente">
                <label for="pacient-name">
                    <svg class="icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-search"><circle cx="10" cy="7" r="4"/><path d="M10.3 15H7a4 4 0 0 0-4 4v2"/><circle cx="17" cy="17" r="3"/><path d="m21 21-1.9-1.9"/></svg>   
                </label>                  
            </div>
            
            <br>

            <div class="patient-info-container">
                    <button href="Apagar_Paciente" class="red-box-button-icon <?php echo $is_user_active ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                    </button>

                    <button href="edit.php" class="box-button-icon <?php echo $is_user_active ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>    
                    </button>

                <input class="input-bar-sus-number" value="679 6894 3467 5893" readonly>
                <input class="input-bar-patient-name" value="Fulano de tal" readonly>
            </div>

            <div class="button-user">
                <!-- Aqui vai ficar o botão-->
                <a href="create.php">
                    <button >CADASTRAR NOVO PACIENTE</button>
                </a>
            </div>
            
        </aside>
    </main>
</body>

</html>