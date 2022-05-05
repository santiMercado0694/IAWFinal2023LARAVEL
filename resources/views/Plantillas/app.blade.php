<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('titulo')

    <link rel="icon" href="/images/logo.png" type="image/png"  >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>

        <div id="app">

            @yield('nav')

            <main class="py-4">

                @yield('content')

            </main>

        </div>

        <!-- Footer -->
	<section id="footer">
		<div class="container">

			<div class="row text-center text-xs-center text-sm-left text-md-left" >

                <div class="col-md-6 mt-md-0 mt-3">

          
                    <h5 class="text-uppercase">Nuestros Sponsors</h5>

                        <img src="/images/amd.png" style="height: 120px; width: 170px; display: inline-block; text-align: center;">

                        <img src="/images/nvidia.png" style="height: 120px; width: 170px; display: inline-block; text-align: center;">

                        <img src="/images/HyperX.png" style="height: 120px; width: 170px; display: inline-block; text-align: center;">

                </div>		

				<div class="col-xs-12 col-sm-4 col-md-4" >

					<h5>Contactenos</h5>

					<ul class="list-unstyled quick-links">

						<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i>Direccion : Alsina 232 Bahia Blanca</a></li>
						<li><a href="/"><i class="fa fa-envelope" aria-hidden="true"></i>Mail : Bahiacomputacion@gmail.com</a></li>
						<li><a href="/"><i class="fa fa-phone" aria-hidden="true"></i>Telefono: 2914675342</a></li>

					</ul>
				</div>

			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                    <br><br><br>

					<p class="h6">© Copyright.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">BahiaComputacion</a></p>

				</div>

				

			</div>	

		</div>

	</section>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>