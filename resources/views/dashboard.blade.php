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
        .form-delete{
        	display: inline;
        }
        .sells-container{
        	text-align: center;
        	background: rgba(255, 255, 255, 0.6);
        	width: 900px;
        	margin: 0px 20%;
        	padding: 10px;
        	border: 2px solid black;
        }
        .sell-container{
        	margin-top: 20px;
        }
        .sells-values{
        	font-size: 20px;
        	letter-spacing: 4px;

        }
        .link-edit{
        	margin: 10px;
        }
    </style>
</head>
<body>

	@include('partials.nav')
	<h1>Ventas</h1>

	<div class="sells-container">
		
		@foreach($sells as $sell)

		<article class="sell-container">
			<span class="sells-values">{{ $sell->marca }} | </span>
			<span class="sells-values">{{ $sell->modelo }} | </span>
			<span class="sells-values">{{ $sell->año }} | </span>
			<span class="sells-values">{{ $sell->color }} | </span>
			<span class="sells-values">{{ $sell->precio }}</span>
			<a class="link-edit" href="{{route('sells.edit',$sell->id)}}">Editar</a>
			<form action="{{route('sells.destroy',$sell->id)}}" method="post" class="form-delete">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn-delete">Eliminar</button>
			</form>
		</article>
		<span>_____________________________</span>
		@endforeach
	</div>

</body>
</html>