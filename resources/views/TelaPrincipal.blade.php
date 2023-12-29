<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        /* barra de pesquisa*/
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



        /* LIVROS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        .book {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin: 10px;
            float: left;
            width: 200px;
            background-color: #fff;
        }

        .book img {
            width: 100%;
            height: auto;
        }

        .book-info {
            padding: 10px;
            text-align: center;
        }

        .borrow-button {
            background-color: #022249;
            color: #fff;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!-- barra de pesquisa -->
    <header>
        <img src="imagem/undraw_Reading_re_29f8.png" alt="icon2" id="icon2">
        <h1>Bem Vinda Vitória!</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/LivrosEmprestados">Livros Emprestados</a>
        <?php ?>
        <a href="">Multas</a>
        <div class="search-container">
            <form action="/TelaPrincipal" method="get">
                <input type="text" placeholder="Pesquisar livros..." name="search">
                <button name="buscar" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
    @foreach ($livros as $livro)
        <div class="book">
            <div class="book-info">
                <h3>{{ $livro->titulo }}</h3>
                <p>Autor: {{ $livro->autor }}</p>
                <p>Disponível: Sim</p>
                <form action="/pegarLivro" method="post">
                    @csrf
                    <input type="hidden" name="id" id='id' value="{{ $livro->id }}" >
                    <button type="submit" class="borrow-button">Pegar Livro</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>

</body>

</html>