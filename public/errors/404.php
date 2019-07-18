<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erro 404</title>
    <style>
        * {
            font-family: sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 100px;
            margin: 0;
            margin-top: 200px;
        }
        h2 {
            color: gray;
            font-size: 20px;
            font-weight: normal;
            margin-bottom: 60px;
        }
        a {
            background: none;
            border: 2px solid gray;
            padding: 15px 30px;
            border-radius: 50px;
            font-family: sans-serif;
            text-decoration: none;
            color: black;
        }
        a:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Erro :(</h1>
    <h2>Página não encontrada</h2>
    <a href="<?php e(getUrlIndexPage()); ?>">
        Voltar para a página inicial
    </a>
</body>
</html>