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
    <title>Editar Atendimento</title>
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
            <h1>Editar Atendimento</h1>
        </aside>
        <aside class="container-right">
            <form method="post" action="" class="custom-scrollbar">
                <div class="input-spacing">
                    <label for="complaint" class="header">Reclamação</label>
                    <input type="text" id="complaint">
                </div>

                <div class="input-spacing">
                    <label for="pulse" class="header">Pulso</label>
                    <input type="text" id="pulse">
                </div>

                <div class="input-spacing">
                    <label for="temperature" class="header">Temperatura</label>
                    <input type="text" id="temperature">
                </div>


                <div class="input-spacing">
                    <label for="saturation" class="header">Saturação</label>
                    <input type="text" id="saturation">
                </div>

                <div class="input-spacing">
                    <label for="weight" class="header">Peso</label>
                    <input type="text" id="weight">
                </div>

                <div class="input-spacing">
                    <label for="height" class="header">Altura</label>
                    <input type="text" id="height">
                </div>
                <div class="input-spacing-checkbox checkbox-container">
                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="x-ray" name="x-ray">
                        <label for="x-ray">Raio-X</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="ultrasound" name="ultrasound">
                        <label for="ultrasound">Ultrassom</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="cerebrospinal-fluid" name="cerebrospinal-fluid">
                        <label for="cerebrospinal-fluid">Líquido Cefalorraquidiano</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="blood" name="blood">
                        <label for="blood">Sangue</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="ecg" name="ecg">
                        <label for="ecg">Eletrocardiograma</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="urine" name="urine">
                        <label for="urine">Urina</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="ct-scan" name="ct-scan">
                        <label for="ct-scan">Tomografia Computadorizada</label>
                    </div>

                    <div class="input-spacing-checkbox">
                        <input type="checkbox" id="violence-suspicion" name="violence-suspicion">
                        <label for="violence-suspicion">Suspeita de Violência</label>
                    </div>
                </div>

                <div class="input-spacing">
                    <label for="clinical-data" class="header">Dados clínicos</label>
                    <textarea id="clinical-data"></textarea>
                </div>

                <div class="input-spacing">
                    <label for="health-center" class="header">Transferência (Unidade de Saúde)</label>
                    <input type="text" id="health-center">
                </div>

                <div class="input-spacing">
                    <label for="diagnosis" class="header">Diagnóstico</label>
                    <input type="text" id="diagnosis">
                </div>

                <div class="input-spacing">
                    <label for="unit-observation" class="header">Observação na Unidade</label>
                    <input type="text" id="unit-observation">
                </div>

                <div class="input-spacing">
                    <label for="risk-class" class="header">Classe de Risco</label>
                    <input type="text" id="risk-class">
                </div>

                <div class="input-spacing">
                    <label for="departure-date" class="header">Data de Saída</label>
                    <input type="text" id="departure-date">
                </div>


                <div class="button-user">
                 <a href="create.php">
                    <button>CADASTRAR NOVO PACIENTE</button>
                </a>
            </div>


    </main>
</body>

</html>