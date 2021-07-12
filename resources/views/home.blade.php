<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                margin: 0; 
                padding: 0;
            }
            main {
                display: flex;
                width: 100%; 
                height: 100vh; 
                background-color: #636B6F;
            }
            div {
                display: flex; 
                width: 200px;
                height: 200px;
                margin: auto;
                border: 1px solid white;
                border-radius: 50%;
                transition: all linear 0.5s;
            }
            div:hover {
                transform: scale(1.1, 1.1);
                transition: all linear 0.5s;
                border: 1px solid white;
                background-color: opacity(100);
            }
            div:hover h1 {
                color: white;
                font-size: 25px;
                transition: all linear 0.5s;
            }
            h1 {
                margin: auto;
                color: white;
                font-size: 30px;
                transition: all linear 0.5s;
            }
        </style>
    </head>
    <body>
        <header>
        </header>
        <main>
            <div>
                <h1>Progetto</h1>
            </div>
        </main>
    </body>
</html>
