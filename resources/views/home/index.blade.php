@extends('partials.master')

@section('public-content')

    <div class="content mb-5">
        {{--Primer slide--}}

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(19).jpg"
                        class="d-block w-100"
                        alt="..."
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa deserunt eos fugit in
                            laudantium magnam maiores reiciendis tenetur vero?</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(19).jpg"
                         alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa deserunt eos fugit in
                            laudantium magnam maiores reiciendis tenetur vero?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(19).jpg"
                         alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa deserunt eos fugit in
                            laudantium magnam maiores reiciendis tenetur vero?</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{--Galery--}}

        <section class="ftco-section mx-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading-section mb-5">VER GALERÍA DE ACTIVIDADES</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-end justify-content-center"
                                         style="background-image: url({{asset('../../../../img/work-1.jpg')}});">
                                        <div class="text w-100">
                                            <span class="cat">Web Design</span>
                                            <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-end justify-content-center"
                                         style="background-image: url({{asset('../../../../img/work-2.jpg')}});">
                                        <div class="text w-100">
                                            <span class="cat">Web Design</span>
                                            <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-end justify-content-center"
                                         style="background-image: url({{asset('../../../../img/work-3.jpg')}});">
                                        <div class="text w-100">
                                            <span class="cat">Web Design</span>
                                            <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-end justify-content-center"
                                         style="background-image: url({{asset('../../../../img/work-4.jpg')}});">
                                        <div class="text w-100">
                                            <span class="cat">Web Design</span>
                                            <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-end justify-content-center"
                                         style="background-image: url({{asset('../../../../img/work-5.jpg')}});">
                                        <div class="text w-100">
                                            <span class="cat">Web Design</span>
                                            <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--Galery--}}

        <div class="investigacion mt-5 mx-5">
            <h3 class="text-center mt-5">AREAS DE INVESTIGACION</h3>
            <div class="child">
                <div class="d-inline-block">
                    <img src="{{asset('../../../../img/ca3.jpg')}}" alt="" class="img-thumbnail area-img"
                         width="100"
                         height="100"><br>
                    <p class="d-inline-block text-child">Desarrollo económico y <br> social de El Salvador</p>
                </div>
                <div class="d-inline-block">
                    <img src="{{asset('../../../../img/ca3.jpg')}}" alt="" class="img-thumbnail area-img"
                         width="100"
                         height="100"><br>
                    <p class="d-inline-block text-child">Gobernabilidad, democracia <br>
                        y seguridad ciudadana</p>
                </div>
                <div class="d-inline-block">
                    <img src="{{asset('../../../../img/ca3.jpg')}}" alt="" class="img-thumbnail area-img"
                         width="100"
                         height="100"><br>
                    <p class="d-inline-block text-child">Educación y mercados <br>
                        de trabajo</p>
                </div>
                <div class="d-inline-block">
                    <img src="{{asset('../../../../img/ca3.jpg')}}" alt="" class="img-thumbnail area-img"
                         width="100"
                         height="100"><br>
                    <p class="d-inline-block text-child">Juventud y <br>
                        desarrollo humano</p>
                </div>
                <div class="d-inline-block">
                    <img src="{{asset('../../../../img/ca3.jpg')}}" alt="" class="img-thumbnail area-img"
                         width="100"
                         height="100"><br>
                    <p class="d-inline-block text-child">Dinámicas <br>
                        territoriales</p>
                </div>
            </div>
        </div>


        {{--Galery--}}

        {{--Infografias--}}
        <div class="container-fluid galery mt-5 mb-5">
            <h3 class="text-center">VER GALERIA DE INFOGRAFIAS</h3>
            <div class="card-deck">
                <div class="card card-galery">
                    <a href="#" target="_blank">
                        <img class="card-img-top" src="{{asset('../../../../img/ca2.jpg')}}" alt="Card image cap">
                    </a>
                </div>
                <div class="card card-galery">
                    <a href="#" target="_blank">
                        <img class="card-img-top" src="{{asset('../../../../img/ca2.jpg')}}" alt="Card image cap">
                    </a>
                </div>
                <div class="card card-galery">
                    <a href="#" target="_blank">
                        <img class="card-img-top" src="{{asset('../../../../img/ca2.jpg')}}" alt="Card image cap">
                    </a>
                </div>

            </div>
        </div>
        {{--Audiovisulaes--}}
        <div class="videos mt-5 mb-5 mx-5">
            <h3 class="text-center">VER GALERIA DE AUDIOVISUALES</h3>
            <div class="card-deck">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/2k4QASc4aHs" frameborder="0" style="height: 100%;"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/Cdtw7T8LkKo" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/gygT6M0sJIU" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

            </div>
        </div>
        {{--Contacto--}}
        <div class="card-group mx-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2">
                            <span class="card-img-top"><i class="fab fa-twitter" style="color: #57b4f2"></i></span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-10 col-xl-10">
                            <h3 class="card-title">FLACSO El Salvador</h3>
                            <h5 class="card-title">@FLACSOES</h5>
                        </div>
                    </div>

                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis dicta
                        esse, fugit id maiores nam obcaecati provident quis quod, ratione sequi sint, suscipit tempora
                        vero! Modi, provident totam. Architecto.</p>
                    <p class="float-right">11/11/2020</p><br>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsa itaque
                        rerum voluptatibus! Ab amet at, cumque eos est, ipsum itaque iusto nihil provident, quia quos
                        reiciendis reprehenderit tempore vel.</p>
                </div>
            </div>
            <div class="card bg-principal">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2">
                            <span class="card-img-top"><i class="fab fa-facebook-f"></i></span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-10 col-xl-10">
                            <h3 class="card-title">FLACSO El Salvador</h3>
                            <h5 class="card-title">@flacsoelsalvador</h5>
                        </div>
                    </div>

                    <em class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis dicta
                        esse, fugit id maiores nam obcaecati provident quis quod, ratione sequi sint, suscipit tempora
                        vero! Modi, provident totam. Architecto.</em>
                    <br>
                    <br>
                    <img class="card-img-top" src="{{asset('../../../../img/fb.png')}}" width="100" height="100"
                         alt="Card image cap">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">BOLETINES DE NOTICIAS</h3>
                    <p class="card-text">Boletín de Noticias
                        Suscríbase y reciba las actualizaciones más
                        recientes nuestro quehacer
                    </p>
                    <form>
                        <div class="form-group">
                            <input class="form-control mr-sm-2 input-name" id="name" type="text" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input class="form-control mr-sm-2 email-input" id="email" type="text"
                                   placeholder="Correo electronico">
                        </div>

                        <button type="submit" class="btn float-right">Submit <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
