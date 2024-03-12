<?php
require_once('../../../public/utils/index.php');
check_sessions();
check_for_administrator();

//=======
require_once('../../Controllers/UserController.php');

$user_id = $_GET['user_id'];

$userController = new UserController();

$user_final = $userController->getAllWhere('id', $user_id);

// Verifique se há dados retornados
if ($user_final) {
    foreach ($user_final as $user) {
        $name = $user->getName();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $cpf =  $user->getCpf();
        $phone = $user->getPhone();
        $email = $user->getEmail();
        $user_type = $user->getUserType();
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
    <title>Editar Usuário</title>
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
            <h1 class="header">Editar Usuário</h1>
        </aside>
        <aside class="container-right">
            <form action="../../Services/EditUser.php?user_id=<?php echo $user->getId()?>" method="post">
                <section class="custom-scrollbar">
                <div class="input-spacing">
                    <label for="name" class="header">Nome completo</label>
                    <input name="name" value="<?php echo $name?>" type="text" id="user-name" placeholder="Nome completo do usuário"
                        required autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="username" class="header">Nome de usuário</label>
                    <input name="username" value="<?php echo $username?>" type="text" id="user-name-unico" placeholder="Nome de usuário único"
                        required autocomplete="off">
                </div>
                
                <div class="input-spacing">
                    <label for="password" class="header">Senha</label>
                    <input name="password" value="<?php echo $password?>" type="text" id="user-senha" placeholder="Senha" required
                        autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="cpf" class="header">CPF</label>
                    <input name="cpf" value="<?php echo $cpf?>" type="text" id="user-cpf" placeholder="CPF do usuário" required
                        autocomplete="off">
                </div>
                
                <div class="input-spacing">
                    <label for="phone" class="header">Telefone</label>
                    <input name="phone" value="<?php echo $phone?>" type="text" id="user-phone" placeholder="Telefone do usuário" required
                    autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="email" class="header">E-mail</label>
                    <input name="email" value="<?php echo $email?>" type="text" id="user-email" placeholder="E-mail do usuário" required
                    autocomplete="off">
                </div>

                <div class="input-spacing">
                    <label for="user_type" class="header"> Tipo Usuário</label><br>
                    <select name="user_type" class="option-user-type" id="user-adm" required>
                        <option value="administrador"<?php if("administrador" === $user_type){echo "selected";}?>>Administrador</option>
                        <option value="funcionario" <?php if("funcionario" === $user_type){echo "selected";}?>>Funcionário</option>
                        <option value="medico" <?php if("medico" === $user_type){echo "selected";}?>>Medico</option>
                    </select>
                </div>

            </section>

            
            <input class="button-user" type="submit" value="SALVAR MODIFICACOES">
            
            </form>
        </aside>
    </main>
</body>

</html>