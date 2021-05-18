<ul class="navbar-nav mr-auto">

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Inicio
          <span class="sr-only">(current)</span>
        </a>
    </li>
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio Tangibles
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">



          <li>
            <a class="dropdown-item" href="{{ route('pagina','Arquitectura Religiosa') }}">Arquitectura Religiosa</a>
          </li>

          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Arquitectura Civíl</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('pagina', 'Equipamiento Urbano') }}">Equipamiento Urbano</a></li>
              <li><a class="dropdown-item" href="{{ route('pagina','Monumentos') }}">Monumentos</a></li>

              
              <li><a class="dropdown-item" href="#">Más</a></li>
              
              

              {{--  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                </ul>
              </li>  --}}

            </ul>
          </li>
          <li><a class="dropdown-item" href="{{ route('pagina','Bienes Muebles') }}">Bienes Muebles</a></li>
          

        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio Intangible
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('pagina','Mama Negra') }}">Mama Negra</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Danzante del Sol') }}">Danzante del Sol</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Caporales de Angamarca') }}">Caporales de Angamarca</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Fiesta de San Miguel de Salcedo') }}">Fiesta de San Miguel de Salcedo</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Niño de Isinche') }}">Niño de Isinche</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio natural
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('pagina','Parque Nacional Cotopaxi') }}">Parque Nacional Cotopaxi</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Parque Nacional LLanganates') }}">Parque Nacional LLanganates</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Reserva Ecológica Illinizas') }}">Reserva Ecológica Illinizas</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Información Patrimonial
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('pagina','Kinkiyary') }}">Kinkiyary</a></li>
          <li><a class="dropdown-item" href="{{ route('videos','Ucumamayaya TV') }}">Ucumamayaya TV</a></li>
          <li><a class="dropdown-item" href="{{ route('videos','Panzaleito') }}">Panzaleito</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Libros y/o Artículos') }}">Libros y/o Artículos</a></li>
          
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Normativa
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('pagina','Internacional') }}">Internacional</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Nacional') }}">Nacional</a></li>
          <li><a class="dropdown-item" href="{{ route('pagina','Local') }}">Local</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">Más</a>
    </li>

    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('administracion') }}">Administración</a>
    </li>
    @endauth

    
    

</ul>