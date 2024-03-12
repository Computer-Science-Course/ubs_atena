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
    <title>Criar Atendimento</title>
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
            <h1>Criar Atendimento</h1>
        </aside>

        <aside>

            <form method="post" action="../../Services/CreatePatient.php">
                <section class="custom-scrollbar">
                    <div class="input-spacing">
                        <label for="complaint" class="header">Reclamação</label>
                        <input type="text" id="complaint" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="pulse" class="header">Pulso</label>
                        <input type="text" id="pulse" name="pulse" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="temperature" class="header">Temperatura</label>
                        <input type="text" id="temperature" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="saturation" class="header">Saturação</label>
                        <input type="text" id="saturation" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="weight" class="header">Peso</label>
                        <input type="text" id="weight" required autocomplete="off">
                    </div>

                    <div class="input-spacing">
                        <label for="height" class="header">Altura</label>
                        <input type="text" id="height" required autocomplete="off">
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
                        <label for="medical-observations" class="header">Observações Médicas</label>
                        <textarea id="medical-observations" name="medical-observations"></textarea>
                    </div>

                    <div class="input-spacing">
                        <label for="health-center" class="header">Transferência (Unidade de Saúde)</label>
                        <input type="text" id="health-center" name="health-center">
                    </div>


                    <div class="button-user">
                        <input class="button-user" type="submit" value="CRIAR NOVO ATENDIMENTO">
                    </div>
                </section>
            </form>
        </aside>
    </main>
</body>

</html>