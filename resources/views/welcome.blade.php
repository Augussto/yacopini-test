<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #cccccc;
                width: 100%; 
                height: 800px; 
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover;
            }
            h1{
                text-align: center;
            }
            #img1{
                width: 500px;
                float: left;
                margin-right: 15px;
            }
            #img2{
                width: 500px;
                float: right;
                margin-right: 15px;
            }
            #text1{

            }
            #text2{

            }
            span{
                font-size: 20px;
                letter-spacing: 5px;
            }
            .container1{
                width: 50%;
                margin: 20px auto;
                padding: 15px;
            }
            .container2{
                width: 50%;
                margin: 20px auto;
                padding: 15px;
            }
            .reset {
                clear: both;
            }
            .news{

            }
        </style>
    </head>
    <body>
        @include('partials.nav')
        <h1>BIENVENIDO A YACOPINI</h1>
        <div class="news">
            <div class="container1">
                <img id="img1" src="https://www.cronista.com/files/image/308/308933/5ffe320c43709_950_534!.jpg?s=7d9d239fbdd6d6e2b171287a263f9763&d=1617153500"><br>
                <span id="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span>
                <div class="reset"></div>
            </div>
            <div class="container2">
                <img id="img2" src="https://www.mendoza.gov.ar/prensa/wp-content/uploads/sites/23/2014/08/view_crop_15699.jpg">
                <span id="text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </div>
        </div>
    </body>
</html>
