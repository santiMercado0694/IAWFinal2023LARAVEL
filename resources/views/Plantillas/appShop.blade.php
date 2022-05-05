@extends('Plantillas.app')

@section('titulo')

        <title>{{ $title ?? 'BAHIA COMPUTACION' }}</title>

@endsection

@section('nav')

        @include('Herramientas.nav')

@endsection

@section('footer')

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

@endsection