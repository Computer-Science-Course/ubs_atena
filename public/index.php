<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Títulos</title>
    <link rel="stylesheet" type="text/css" href="./css/buttons.css">
    <link rel="stylesheet" type="text/css" href="./css/texts.css">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <style>
        #container {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            background-color: #FFFFFF;
            /* Cor de fundo*/
            border: 1px solid #7E7D86;
            /* Estilo e cor da borda*/
            padding: 24px;
            /* Espaçamento interno para o conteúdo */
            display: flex;
            gap: 32px;
            justify-content: flex-start;
            /* Ajustado para flex-start */
            align-items: flex-start;
            /* Ajustado para flex-start */
            height: 100vh;
            margin-left: auto;
            /* Movendo para a direita */
        }

        #anamnese-container {
            width: 48%;
            /* 50% para dividir ao meio */
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 16px;
        }

        aside {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 8px;
            /* Reduzi o espaçamento entre os elementos */
            margin-top: 24px;
            /* Ajustei para mover para baixo */
        }

        label {
            color: #22346E;
            /* Cor do texto */
            margin-bottom: 4px;
            /* Ajustei a margem inferior */
            margin-left: 40px;
        }

        #sus-number,
        #pacient-name {
            width: 90%;
            /* Para ocupar toda a largura disponível */
            width: 704px;
            height: 62;
            border: 1%;
            padding: 10px;
            margin-bottom: 10px;
            color: #7E7D86;
            /* Define a cor para o texto que for digitado */
        }

        #cadastrar-button {
            width: 100%;
            /* Para ocupar toda a largura disponível */
        }

        #text-container {
            width: 48%;
            /* 50% para dividir ao meio */
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 16px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="anamnese-container">
            <h1 id="anamnese-title">Anamnese</h1>
        </div>
        <aside>
            <!-- Adicionei um campo do paciente -->
            <label for="pacient-name">Paciente</label>
            <input type="text" id="pacient-name" placeholder="Carteira do SUS ou nome do paciente">
            <div style="display: flex; gap: 8px; align-items: flex-start;">
                <input type="text" id="sus-number" value="679 6894 3467 5893">
                <input type="text" value="Fulano de Tal" readonly>
            </div>
            <input type="button" id="cadastrar-button" value="CADASTRAR NOVO PACIENTE ">
        </aside>
    </div>
</body>

</html>