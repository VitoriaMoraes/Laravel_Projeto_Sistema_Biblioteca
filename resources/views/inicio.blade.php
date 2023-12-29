<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <style>
    /* barra de pesquisa*/
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

    /* barra de pesquisa*/

    /* Texto da tela principal*/
    .TextoInicio {
      background-color: white;
      color: #022249;
      padding: 50px;
      font-size: 30px;
      text-align: left;
      font-family: 'Snell Roundhand, cursive';
      font-style: italic
    }

    .SubTexto {
      margin-top: -5%;
      color: #022249;
      text-align: left;
      font-size: 25px;
    }

    .Desc {
      color: black;
      text-align: left;
      font-size: 15px;
      flex: 1;
      margin-left: 5px;
      margin-top: -10%;
    }

    .mae {
      display: flex;
    }

    .botaoInicialD {
      margin-top: 25px;
      margin-bottom: 70px;
      color: black;
      font-size: 25px;
    }

    .btn {
      position: relative;
      margin: 3px;
      width: 25%;
      border-radius: 25px;
      background-color: #022249;
      border-style: double;
      border-color: #022249;
      color: white;
      width: 92px;
    }

    img {
      align-self: flex-start;
      width: 10%;
    }

    #jjj {
      width: 60%;
      margin-left: 30%;
    }

    .PAI {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    h1 h4 {
      margin-top: 24%;
    }

    /* Texto da tela principal*/
  </style>
</head>

<body>
  <!-- barra de pesquisa -->
  <header>
    <img src="imagem/undraw_Reading_re_29f8.png" alt="icon2">
    <h1>Sua Estante de Livros Online!</h1>
  </header>

  <nav>
    <a href="/inicio">Home</a>
    <a href="/login">Login</a>
    <a href="/login">Cadastro</a>
    <div class="search-container">
      <form action="/search" method="get">
        <input type="text" placeholder="Pesquisar livros..." name="search">
        <button name="buscar" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  <!-- barra de pesquisa -->

  <!-- Conteúdo da página aqui -->

  <div class="TextoInicio">
    <h1>Olá, Seja bem vindo(a) a sua estante de livros virtual!</h1>

    <div class="PAI">
      <div class="SubTexto">
        <strong>
          <h4>Torne sua experiencia de leitura ainda mais prazerosa e dinâmica.</h4>
        </strong>
      </div>

      <div class="ini">
        <img src="imagem/38496_preview_rev_1.png" id="jjj" alt="jjj">
      </div>

      <div class="Desc">
        Embarque em uma jornada fascinante pelo mundo dos livros descubra o prazer da leitura e compartilhe
        conhecimento,
        deixe que cada página seja uma porta para a imaginação, e que cada história seja uma oportunidade de aprendizado
        e
        crescimento. Vamos ler juntos e fazer desta uma jornada inesquecível!
      </div>
    </div>


    <form action="/login">
      <div class="mae">
        <div class="botaoInicialD">
          <button  class="btn" name="iniciar" type="submit"> Iniciar</button>
        </div>
    </form>


  </div>

</body>

</html>