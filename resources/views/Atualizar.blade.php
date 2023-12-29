<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livros</title>
    <style>
        /* barra de pesquisa */
        img {
            width: 10%;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4rem;
            background-color: white;
            color: #022249;
            padding: 10px;
            font-family: 'Snell Roundhand, cursive';
            font-style: italic
        }

        header h2 {
            align-self: center;
        }

        nav {
            background-color: #022249;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        nav a:hover {
            background-color: #ddd;
            color: #022249;
        }

        .search-container {
            float: right;
        }

        input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background-color: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #ccc;
        }

        /* tela de cadastro de livros */

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
           
        }

        h3 {
            text-align: center;
            font-family: 'Snell Roundhand, cursive';
            color: #022249;

        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input,
        button {
            margin-bottom: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color:#022249;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <!-- barra de pesquisa -->
    <header>
        <img src="imagem/undraw_Reading_re_29f8.png" alt="icon2" id="icon2">
        <h1>Bem Vindo(a) !</h1>
    </header>

    <nav>
        <a href="/login">Home</a>
        <a href="/LivrosCadastrados">Livros Cadastrados</a>
    </nav>

    <div class="container">
    <h2> Informe o Id do Livro e o campo que deseja atualizar!</h2> <br>
    <form action='/Atualizar-livro' method="post" enctype="multipart/form-data">
        @csrf
        <label for="id">Id do Livro:</label>
        <input type="number" id="id" name="id" required>

        <label for="titulo">Novo Titulo do Livro:</label>
        <input type="text" id="titulo" name="titulo">

        <label for="genero">Novo genero do Livro:</label>
        <input type="text" id="genero" name="genero">

        <label for="autor">Novo autor do Livro:</label>
        <input type="text" id="autor" name="autor">

        <button type="submit">Atualizar</button>
    </form>

</body>

</html>