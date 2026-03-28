<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <div class="boxLogin">

            <form action="index.php">
                <fieldset>

                    <div class="boxInputLogin">
                        <input class="inputUserLogin" type="text" name="email" id="email" required>
                        <label class="labelInputLogin" for="email">Usuario</label>
                    </div>

                    <div class="boxInputLogin">
                        <input class="inputUserLogin" type="password" name="senha" id="senha" required>
                        <label class="labelInputLogin" for="email">Senha</label>
                    </div>

                    <input type="submit" id="submit" value="Enviar">

                    <a href="formulario.php">Criar Cadastro ?</a>

                    <label for="checkbox">
                        <input class="checkbox" type="checkbox" id="checkbox" name="checkbox"> Lembrar Senha ?
                    </label>

                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>