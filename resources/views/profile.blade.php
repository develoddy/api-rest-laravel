@extends('layouts.app')


@section('title', 'Profile')

@section('content')

    <div class="container">
        {{-- Row --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div id="content" class="p-4 p-md-5">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                            class="rounded-circle" alt="..." width="150" height="150">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 fs-5 fw-bolder text-sm-start">lujandev</div>
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 fw-bolder text-sm-center text-center">editar perfil
                    </div>
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 text-sm-end text-end">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-radioactive" viewBox="0 0 16 16">
                                <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1ZM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Z" />
                                <path
                                    d="M9.653 5.496A2.986 2.986 0 0 0 8 5c-.61 0-1.179.183-1.653.496L4.694 2.992A5.972 5.972 0 0 1 8 2c1.222 0 2.358.365 3.306.992L9.653 5.496Zm1.342 2.324a2.986 2.986 0 0 1-.884 2.312 3.01 3.01 0 0 1-.769.552l1.342 2.683c.57-.286 1.09-.66 1.538-1.103a5.986 5.986 0 0 0 1.767-4.624l-2.994.18Zm-5.679 5.548 1.342-2.684A3 3 0 0 1 5.005 7.82l-2.994-.18a6 6 0 0 0 3.306 5.728ZM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center justify-content-sm-center mt-3">
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 text-sm-start text-start">12 Publicaciones</div>
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 text-sm-center text-center">102 Seguidores</div>
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 text-sm-end text-end">510 Seguidos</div>
                </div>

                <div class="row d-none d-lg-block justify-content-md-center mt-3">
                    <div class="col col-sm-3 col-md-3 col-lg-4 col-xl-4 fs-5 fw-bolder fw-bold">Eddy Lujan</div>
                </div>

                <div class="row d-none d-lg-block mt-3">
                    <p>🧑🏻‍💻App developer</p>
                    <p>📲 android, iOS y web</p>
                    <p>🇪🇸 Made in Spain</p>
                    <p>✉️ lujandev@lujandev.com</p>
                </div>
            </div>
        </div>

        {{-- Row --}}
        <div class="row mt-3">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="navbar-collapse">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="img-fluid" alt="..."
                                                style="border-radius: 50%; height: 77px; width: 77px;">
                                        </a>
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="img-fluid" alt="..."
                                                style="border-radius: 50%; height: 77px; width: 77px;">
                                        </a>
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="img-fluid" alt="..."
                                                style="border-radius: 50%; height: 77px; width: 77px;">
                                        </a>
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="img-fluid" alt="..."
                                                style="border-radius: 50%; height: 77px; width: 77px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        {{-- Row --}}
        <div class="row mt-3">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active font-weight-bold text-uppercase" style="letter-spacing: 1px;" href="#">Publicaciones</a>
                                <a class="nav-link font-weight-bold text-uppercase" style="letter-spacing: 1px;" href="#">Rels</a>
                                <a class="nav-link text-uppercase" href="#" style="letter-spacing: 1px;">Guardadas</a>
                                <a class="nav-link text-uppercase" style="letter-spacing: 1px;">Etiquetas</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row text-center text-lg-start">
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
