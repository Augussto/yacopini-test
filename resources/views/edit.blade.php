<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yacopini Dashboard</title>
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url('https://www.cronista.com/files/image/308/308933/5ffe320c43709_950_534!.jpg?s=7d9d239fbdd6d6e2b171287a263f9763&d=1617153500');
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
        	text-align: center;
        }
        .form-container{
        	display: inline-block;
        	border: 2px solid black;
        	width: 250px;
        	padding: 10px;
        	margin: 0px 40%;
        	text-align: center;
        	background: rgba(255, 255, 255, 0.6);
        	border: 2px solid black;
        }
        .label-info{
        	font-size: 20px;
        	letter-spacing: 4px;
        	display: inline-block;
        	text-align: center;
        }
        .btn-send{
        	text-align: center;
        	margin: 10px;
        	font-size: 20px;
        }
    </style>
</head>
<body>

	@include('partials.nav')
	<h1>Ingresa una Nueva Venta!</h1>

	<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />

	<form method="POST" action="{{ route('sells.update', $sell->id)}}" class="form-container">
		@csrf
		@method('PATCH')
		<label class="label-info">
			Marca <br>
			<input type="text" name="marca" value="{{$sell->marca}}">
		</label>
		<label class="label-info">
			Modelo <br>
			<input type="text" name="modelo" value="{{$sell->modelo}}">
		</label>
		<label class="label-info">
			Año <br>
			<input type="text" name="año" value="{{$sell->año}}">
		</label>
		<label class="label-info">
			Color <br>
			<input type="text" name="color" value="{{$sell->color}}">
		</label>
		<label class="label-info">
			Precio <br>
			<input type="text" name="precio" value="{{$sell->precio}}">
		</label>
		<button class="btn-send">Enviar</button>
	</form>


</body>
</html>