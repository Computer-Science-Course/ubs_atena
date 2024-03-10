<?php
require_once('../../../public/utils/index.php');
check_sessions();
check_for_administrator();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/global.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Criar Usuário</title>
</head>

<body>
    <!-- Menu -->
    <?php
    $is_service_active = '';
    $is_pacient_active = '';
    $is_user_active = 'active';
    include_once('../../../templates/menu/index.php');
    ?>
    <main id="container">
        <aside>
            <h1 class="header">Criar Usuário</h1>
        </aside>
        <aside class="container-right">
        <section class="custom-scrollbar">
            <form action="" method="post">
                <div class="input-spacing">
                    
                    <label for="user-name" class="header">Nome completo</label>
                    <input type="text" class="input-bar-primary" id="user-name" placeholder="Nome completo do usuário"
                        required autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-cpf" class="header">CPF</label>
                    <input type="text" class="input-bar-primary" id="user-cpf" placeholder="CPF do usuário" required
                        autocomplete="off">
                </div>
                <div class="input-spacing">
                    <label for="user-name-unico" class="header">Nome de usuário</label>
                    <input type="text" class="input-bar-primary" id="user-name-unico" placeholder="Nome de usuário único"
                        required autocomplete="off">
                </div>
                <div class="input-spacing">
                    <label for="user-senha" class="header">Senha</label>
                    <input type="text" class="input-bar-primary" id="user-senha" placeholder="Senha" required
                        autocomplete="off">
                </div>
                <div class="input-spacing">
                    <label for="user-repetir-senha" class="header">Repetir senha</label>
                    <input type="text" class="input-bar-primary" id="user-repetir-senha" placeholder="Repetir senha"
                        required autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-adm" class="header"> É Administrador</label>
                    <input type="checkbox" class="input-bar-primary" id="user-adm" required autocomplete="off">
                </div>

            <a href="create.php">
                <input class="button-user" type="button" value="SALVAR NOVO USUARIO">
            </a>  
            </form>
            
        </section>
           
            

           

        </aside>
    </main>
</body>

</html>