<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand" href="{{ route('products.index') }}">

            BAHIA COMPUTACION | ADMINISTRACION

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">

             @if (Auth::check())

             <li class="nav-item">

                <a class="nav-link" href="{{ route('shop') }}">PAGINA PRINCIPAL</a>

            </li>

                <li class="nav-item">

                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESION</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
		            </form>

                </li>

                

                    @endif

                    </div>

                </li>

            </ul>

        </div>

    </div>

</nav>