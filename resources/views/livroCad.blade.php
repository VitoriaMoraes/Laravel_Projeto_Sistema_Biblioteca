<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
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

        h1 {
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
        <a href="/Atualizar-livro">Atualizar Dados</a>
        <a href="/ExcluirLivro">Excluir Livros</a>
    </nav>

    <!-- tela de cadastro de livros -->
    <div class="container">
        <h1>Cadastro de Livros</h1>
        <form action="/livroCad" method="post" enctype="multipart/form-data">
        @csrf
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required>

            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" required>

            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required>

            <label for="capa">Imagem da Capa:</label>
            <input type="file" id="capa" name="capa" class='from-control-file' accept="image/*" required>

            <button type="submit">Cadastrar Livro</button>
        </form>
    </div>
</body>

</html>
