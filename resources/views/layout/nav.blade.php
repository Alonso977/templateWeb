<div class="wrapper">
    <!-- Navbar  -->

    <div id="content">

        <div class="row __content-head">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 __content-img"><img class="mx-5 my-5" src="{{asset('img/logo.png')}}" alt="logo-flacso">
                <p class="d-inline-block">
                    Facultad Latinoamericana <br>
                    de Ciencias Sociales <br>
                    <strong> FLACSO El Salvador</strong>
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><a href="#" class="btn __content-btnContact mx-5 my-5 float-right" >CONTACTO</a></div>
        </div>

        <nav class="navbar navbar-expand-lg" id="nav">
            <button class="navbar-toggler bg-white mb-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-sliders-h"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-4">
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-color">DIALOGOS DEL BICENTENARIO</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-color">INVESTIGACION</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-color">ACTIVIDADES</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-color">PUBLICACIONES</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-color">ACERCA DE</a>
                    </li>
                    <li class="nav-item active __navbar-btncontact">
                        <a href="#" class="nav-link text-color">CONTACTO</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control mr-sm-2 search-input" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
        <main class="py-4 ">
            @yield('public-content')
        </main>

    </div>
</div>
