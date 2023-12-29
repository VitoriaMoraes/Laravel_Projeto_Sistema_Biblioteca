<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

      /* barra de pesquisa*/
        nav {
            background-color: white;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #022249;
            text-align: center;
            padding: 14px;
            text-decoration: none;

        }

        nav a:hover {
            background-color: #ddd;
            color:#022249;
        }

        /* barra de pesquisa*/

        /* CAIXA LATERAL ESQUERDA*/
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            width: 35%;
            background-color: #022249;
            color: white;
            padding: 30px;
            text-align: center;
            font-family: 'Snell Roundhand, cursive';
            font-style: italic
        }

        /* CAIXA LATERAL ESQUERDA*/

        /* FORMULÁRIO DE LOGIN*/
        body {

            margin: 0;
            padding: 20;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .login-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        .login-form {
            color: white;
            text-align: center;
            font-family: 'Snell Roundhand, cursive';
            background-color:  #022249;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(#022249);
            width: 300px;
            align-items: center;
        }

        .side-panel {
            flex: 1;
            background-color: #FF5377;
            color: #FF5377;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

        }

        /* ResponsividadE telas pequenas */
        @media (max-width: 40px) {
            body {
                flex-direction: column;
            }

            .login-container,
            .side-panel {
                flex: none;
                width: 100%;
            }
        }

        .btn {
            position: relative;
            margin: 3px;
            border-radius: 25px;
            background-color: white;
            border-style: double;
            border-color: white;
            color:#022249;
            width: 70%;
            height: 25px;
            margin-top: 30px;
            text-size-adjust: 25px;
        }
        img{
            width: 100%;
            height: 80%;
        }
    </style>
</head>

<body>
    <!-- barra de pesquisa -->
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/">Sobre o Sistema</a>
        </nav>
        <h1>Olá, Esta é a sua estante de livros virtual!</h1>
        <img src="imagem/4742702_38997_preview_rev_1.png" alt="dddd">
    </header>


<!--FORMULÁRIO-->
    <div class="login-container">
        <div class="login-form">
            <h1 style="color: white;">Faça Seu Login</h1>
            <form action="/login" method="post">
                @csrf
                <h3><label for="nome">Usuário:</label></h3>
                <input style="height:25px; width: 80%;" type="text" id="Usuario" name="Usuario"
                    placeholder="Usuário">

                <h3><label for="password">Senha:</label></h3>
                <input style="height:25px; width: 80%;" type="password" id="password" name="senha"
                    placeholder="Senha"> <br>

                <button type="submit" name="entrar" class="btn">Entrar</button>
            </form>
        </div>
    </div>

</body>

</html>
</body>

</html>