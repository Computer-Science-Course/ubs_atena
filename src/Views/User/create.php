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
            <form action="../../Services/User.php" method="post">
                <div class="input-spacing">
                    
                    <label for="user-name" class="header">Nome completo</label>
                    <input type="text" class="input-bar-primary" id="user-name" name="name" placeholder="Nome completo do usuário"
                        required autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-cpf" class="header">CPF</label>
                    <input type="text" class="input-bar-primary" id="user-cpf" name="cpf" placeholder="CPF do usuário" required
                        autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-phone" class="header">Telefone</label>
                    <input type="text" class="input-bar-primary" id="user-phone" name="phone" placeholder="Telefone do usuário" required
                        autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-email" class="header">E-mail</label>
                    <input type="text" class="input-bar-primary" id="user-email" name="email" placeholder="E-mail do usuário" required
                        autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-name-unico" class="header">Nome de usuário</label>
                    <input type="text" class="input-bar-primary" id="user-name-unico" name="username" placeholder="Nome de usuário único"
                        required autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-senha" class="header">Senha</label>
                    <input type="text" class="input-bar-primary" id="user-senha" name="password" placeholder="Senha" required
                        autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user-repetir-senha" class="header">Repetir senha</label>
                    <input type="text" class="input-bar-primary" id="user-repetir-senha" name="repeat_password" placeholder="Repetir senha"
                        required autocomplete="off">
                </div>

                <label for="user-adm" class="header"> É Administrador</label><br>
                <select name="user_type" id="user-adm" required>
                    <option value="administrador">Administrador</option>
                    <option value="funcionario">Funcionário</option>
                    <option value="medico">Medico</option>
                </select>
                
            <a href="create.php">
                <input class="button-user" type="submit" value="SALVAR NOVO USUARIO">
            </a>  
            </form>
            
        </section>
           
            

           

        </aside>
    </main>
</body>

</html>