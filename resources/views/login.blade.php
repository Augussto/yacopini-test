<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yacopini Login</title>
	<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
        body {
            font-family: 'Nunito', sans-serif;
            text-align: center;
           	background-image: url('https://viapais.com.ar/resizer/eFYoZDmxNw16iTSXVNZ9Phf11aM=/982x551/smart/cloudfront-us-east-1.images.arcpublishing.com/grupoclarin/GBSDAMJTG43DSNTCGRQTEODFGE.jpg');
            backdrop-filter: blur(5px);
            background-color: #cccccc;
            width: 100%; 
			height: 800px; 
			background-position: center; 
			background-repeat: no-repeat; 
			background-size: cover;
			overflow: hidden;
        }

        h1{
        	margin-bottom: 100px;
        }
        .login-form{
        	display: inline-block;
        	border: 2px solid black;
        	width: 250px;
        	padding: 10px;
        }
        input, button{
        	margin: 5px;
        }
        
    </style>
</head>
<body>
	<div class="container">
		@include('partials.nav')
		<h1>Login</h1>

		<form class="login-form" method="POST">
				@csrf
				<h2></h2>
				<label>
					<input type="text" name="email" placeholder="Email">
				</label><br>
				<label>
					<input type="password" name="password" placeholder="Contraseña">
				</label><br>
				<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>