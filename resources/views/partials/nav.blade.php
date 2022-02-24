<style type="text/css">
	.nav-container{
		text-align: center;
	}
	.nav-item{
		border: 2px solid black;
		padding: 3px 10px;
		color: black;
	}
	.nav-item:hover{
		padding: 3px 15px;
	}
	img{
		width: 150px;
		height: auto;
		display: inline-block;
	}
	.container{
		text-align: center;
	}
	#logout-form{
		display: inline;
	}
</style>
<div class="container">
<img src="https://www.yacopininissan.com.ar/static/media/yacopini-logo-black.e01d6392.png">
<div class="nav-container">
	<a class="nav-item" href="/">Inicio</a>
	@guest
	<a class="nav-item" href="/login">Login</a>
	@else
	<a class="nav-item" href="/dashboard">Ventas Realizadas</a>
	<a class="nav-item" href="/insert">Nueva Venta</a>
	<form id="logout-form" action="/logout" method="POST">
		@csrf
		<a class="nav-item" href="#" onclick="this.closest('form').submit()">Logout</a>
	</form>
	@endguest
</div>
</div>