@extends('layouts.app')


@section('title', 'Profile')

@section('content')

    <div class="container">
        <div class="row mt-2 mb-0 justify-content-center">
            <div class="col col-md-10 col-lg-8 col-sm-12 col-xl-6 p-0">
                <div class="d-flex">
                    <div class="p-2">
                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                            class="rounded-circle" alt="..." width="150" height="150">
                    </div>
                    <div class="p-2 flex-grow-1">
                        <div class="d-flex flex-column">
                            <div class="p-0">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <a href="" class="fw-bold text-black text-decoration-none">username</a>
                                    </div>
                                    <div class="p-2 flex-grow-1">
                                        <a href="" class="fw-bold text-black text-decoration-none px-2 ">
                                           <button class="btn pt-0 pb-0 btn-outline-secondary border-0 ">Editar perfil</button> 
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-0">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="p-2"><a href="" class="text-black text-decoration-none fw-bold">12 Publicaciones</a></div>
                                    <div class="p-2"><a href="" class="text-black text-decoration-none fw-bold">77 Seguidores</a></div>
                                    <div class="p-2"><a href="" class="text-black text-decoration-none fw-bold">20 Seguidos</a></div>
                                </div>
                            </div>
                            <div class="p-2"><a href="" class="text-black text-decoration-none fw-bold">username</a></div>
                            <div class="p-2 lh-1">
                                <p class="mb-1">🧑🏻‍💻App developer</p>
                                <p class="mb-1">📲 android, iOS y web</p>
                                <p class="mb-1">🇪🇸 Made in Spain</p>
                                <p class="mb-1">✉️ lujandev@lujandev.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stories del perfil --}}
        <div class="row mt-3 justify-content-center">
            <div class="col col-md-8 col-sm-12 ">
                <div class="card border-0">
                    <div class="card-body">
                        @include('web.stories.stories-perfil')
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Tags --}}
        <div class="row mt-3 justify-content-center">
            <div class="col col-md-8 col-sm-12">
                <div class="d-flex flex-row  justify-content-center">
                    <div class="p-2"><a href="" class="text-uppercase text-secondary text-decoration-none fw-bold px-2">Publicaciones</a></div>
                    <div class="p-2"><a href="" class="text-uppercase text-secondary text-decoration-none fw-bold px-2">Reels</a></div>
                    <div class="p-2"><a href="" class="text-uppercase text-secondary text-decoration-none fw-bold px-2">Etiquetas</a></div>
                </div>
                
            </div>
        </div>

        {{-- Grid de las fotos del perfil --}}
        <div class="row mt-2 mb-0 justify-content-center">
            <div class="col col-md-10 col-lg-8 col-sm-12 col-xl-8 p-0">
                <div class="row">
                    <div class="col-4 p-0">
                        <div class="element d-flex h-100 flex-column justify-content-between">
                            <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                {{-- <span>&nbsp;</span> --}}
                                <img class="img-fluid img-thumbnail border-0 rounded-0" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                                {{-- <p>Some text</p> --}}
                            </div>
                            {{-- <a href>Link</a> --}}
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="element d-flex h-100 flex-column justify-content-between">
                            <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                {{-- <span>&nbsp;</span> --}}
                                <img class="img-fluid img-thumbnail border-0 rounded-0" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                                {{-- <p>Some text</p> --}}
                            </div>
                            {{-- <a href class="align-self-end w-100">Link</a> --}}
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="element d-flex h-100 flex-column justify-content-between">
                            <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                {{-- <span>&nbsp;</span> --}}
                                <img class="img-fluid img-thumbnail border-0 rounded-0" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                                {{-- <p>Some text</p> --}}
                            </div>
                            {{-- <a href class="align-self-end w-100">Link</a> --}}
                        </div>
                        
                    </div>
                    <div class="col-4 align-items-center p-0">
                        <div class="element d-flex h-100 flex-column justify-content-between">
                            <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                {{-- <span>&nbsp;</span> --}}
                                <img class="img-fluid img-thumbnail border-0 rounded-0" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                                {{-- <p>Some text</p> --}}
                            </div>
                            {{-- <a href class="align-self-end w-100">Link</a> --}}
                        </div>
                    </div>
                    <div class="col-4 align-items-center p-0">
                        <div class="element d-flex h-100 flex-column justify-content-between">
                            <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                {{-- <span>&nbsp;</span> --}}
                                <img class="img-fluid img-thumbnail border-0 rounded-0" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                                {{-- <p>Some text</p> --}}
                            </div>
                            {{-- <a href class="align-self-end w-100">Link</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
