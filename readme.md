# UBS Atena

Este é o projeto UBS Atena, um sistema de gerenciamento de unidades básicas de saúde (UBS) desenvolvido em PHP. Siga os passos abaixo para configurar e executar o projeto em um ambiente Windows.

## Pré-requisitos
- [XAMPP](https://www.apachefriends.org/index.html): Ambiente de desenvolvimento PHP que inclui Apache, MySQL, PHP e Perl.
- [Git](https://git-scm.com/): Ferramenta de controle de versão para baixar o código-fonte do projeto.
- [Composer](https://getcomposer.org/): Gerenciador de dependências para PHP.

## Passos de Instalação

1. **Baixar e Instalar o XAMPP:**
   - Baixe e instale o XAMPP no [site oficial](https://www.apachefriends.org/index.html), seguindo as instruções do instalador. Certifique-se de que o Apache e o MySQL estejam ativados.

2. **Baixar o Projeto:**
   - Abra o terminal (Git Bash) e execute o seguinte comando para clonar o repositório:
     ```
     git clone git@github.com:Computer-Science-Course/ubs_atena.git
     ```

3. **Colocar o Projeto no Diretório `htdocs`:**
   - Navegue até a pasta onde o XAMPP foi instalado (normalmente `C:\xampp`) e localize o diretório `htdocs`. Copie o diretório do projeto clonado (`ubs_atena`) para este diretório.

4. **Instalar o Composer:**
   - Baixe e instale o Composer seguindo as instruções do [site oficial](https://getcomposer.org/download/).

5. **Instalar Dependências:**
   - Navegue até o diretório do projeto (`ubs_atena`) no terminal e execute o seguinte comando para instalar as dependências:
     ```
     composer install
     ```

6. **Criar Banco de Dados:**
   - Abra o navegador e acesse o phpMyAdmin (normalmente em `http://localhost/phpmyadmin`).
   - Crie um novo banco de dados chamado `ubs_atena`.
   - Importe o arquivo `docs/ubs_atena.sql` para o banco de dados recém-criado.

7. **Acessar o Sistema:**
   - Abra um navegador e digite `http://localhost/ubs_atena`.
   - Você será redirecionado para a página de login do sistema.

8. **Login:**
   - Utilize um dos dois usuários pré-existentes para fazer login:
     1. **Administrador:**
        - Login: akira
        - Senha: 123
     2. **Funcionário:**
        - Login: goku
        - Senha: 123

Agora você pode explorar e utilizar o sistema UBS Atena. Se precisar de mais assistência, consulte a documentação ou entre em contato com a equipe de suporte.