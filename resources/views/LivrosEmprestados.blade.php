<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Emprestados</title>
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

        h2 {
            text-align: center;
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


        /*TABELA*/
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <!-- barra de pesquisa -->
    <header>
        <img src="imagem/undraw_Reading_re_29f8.png" alt="icon2" id="icon2">
        <h1>Bem Vinda Vitoria</h1>
    </header>

    <nav>
        <a href="/TelaPrincipal">Biblioteca</a>
        <div class="search-container">
            <form action="/LivrosCadastrados" method="get">
                <input type="text" placeholder="Pesquisar livros..." name="search">
                <button name="buscar" type="submit">Buscar</button>
            </form>
        </div>
        <a href="/login">Sair</a>
    </nav>
    <h2>Livros Emprestados</h2>
        <hr>

@if(isset($mensagem))
    <p style="color: #022249; font-size:xx-large; font-weight: bold; font-family: 'Snell Roundhand, cursive'; text-align: center;margin-top: 150px;">{{ $mensagem }}</p>
@else
    <table>
        <thead>
            <tr>
                <th>TITULO</th>
                <th>AUTOR</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($livrosEmprestados as $emprestimo)
    <tr>
        <td>{{ $emprestimo->livro->titulo }}</td>
        <td>{{ $emprestimo->livro->autor }}</td>
        <td>{{ $emprestimo->status_emprestimo }}</td>
    </tr>
@endforeach

        </tbody>
    </table>
@endif

</body>

</html>