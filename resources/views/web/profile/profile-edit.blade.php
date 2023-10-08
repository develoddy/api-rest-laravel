@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row mt-2 mb-0 justify-content-center border">
        <div class="col col-md-10 col-lg-8 col-sm-12 col-xl-6 p-0 border-warning">
            <div class="d-flex bg-success">
                item                
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col p-2">
            <div class="d-flex flex-row border border-top">
                 {{-- Item 1 --}}
                <div class="p-2 border border-right" style="width: 40%; height:10%; min-height: 80vh;">
                    <div class="d-flex flex-column">
                        <div class="p-2 d-flex flex-column">
                            <div class="p-2 flex-grow-1 fw-bold h4">Centro de cuentas</div>
                            <div class="p-2">
                                <p class="lh-1 text-secondary">
                                    Ipsum deart up team hold Ipsum deart up team hold Ipsum deart up team hold
                                    Ipsum deart up team hold Ipsum deart up team hold
                                </p>
                            </div>
                            <div class="p-2">
                                <ul class="list-group">
                                    <li class="list-group-item p-0 border-0">
                                        <div class="d-flex flex-row">
                                            <div class="p-2 text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                                  </svg>
                                            </div>
                                            <div class="p-2 flex-grow-1 text-secondary">Datos personales</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        <div class="d-flex flex-row">
                                            <div class="p-2 text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                                  </svg>
                                            </div>
                                            <div class="p-2 flex-grow-1 text-secondary">Contraseña y seguridad</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        <div class="d-flex flex-row">
                                            <div class="p-2 text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                                  </svg>
                                            </div>
                                            <div class="p-2 flex-grow-1 text-secondary">Preferencia de anuncio</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div class="p-2 fw-bold h4">Configuración</div>
                            <div class="p-2">
                                <ul class="list-group">
                                    <li class="list-group-item p-2 fw-bold border-0">Editar perfil</li>
                                    <li class="list-group-item p-2 fw-bold border-0">Preferencia de idiomas</li>
                                    <li class="list-group-item p-2 fw-bold border-0">Aplicaciones y web</li>
                                    <li class="list-group-item p-2 fw-bold border-0">Notificaciones por correo electronico</li>
                                    <li class="list-group-item p-2 fw-bold border-0">Notificaciones push</li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="p-2 w-100 ">
                    <div class="d-flex flex-row border-bottom">
                        <div class="p-2 d-flex flex-column flex-grow-1">
                            <div class="p-0"><strong class="h3 fw-bold">Editar perfil</strong></div>
                        </div>
                    </div>

                    <div class="d-flex flex-column" style="height: 90%;">
                        <div class="p-2 flex-grow-1">
                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <div class="d-flex flex-row">
                                        <div class="p-2">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80" class="" style="border-radius: 50%; height: 50px; width: 50px;">
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex flex-column">
                                                <div class="p-0"><strong class="fw-bold">username</strong></div>
                                                <div class="p-0"><a href="" class="fw-bold text-primary text-decoration-none">Cambiar foto de perfil</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0">
                                            <div class="d-flex flex-row">
                                                <div class="p-2 d-flex w-25">
                                                    <strong class="fw-bold h5">Sitio web</strong>
                                                </div>
                                                <div class="p-2 d-flex flex-column w-50">
                                                    <div class="input-group d-flex">
                                                        <input type="text" class="form-control"
                                                            placeholder="Sitio web"
                                                            aria-label="Nombre de usuario del destinatario" aria-describedby="button-addon2">
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="lh-1 text-secondary">
                                                            Ipsum deart up team hold Ipsum deart up team
                                                            deart up team hold Ipsum deart up Ipsum deart 
                                                            up team hold Ipsum Ipsum deart up Ipsum deart
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex flex-row">
                                                <div class="p-2 d-flex w-25">
                                                    <strong class="fw-bold h5">Presentación</strong>
                                                </div>
                                                <div class="p-2 d-flex flex-column w-50">
                                                    <div class="input-group d-flex">
                                                        <div class="input-group">
                                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                                          </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="lh-1 text-secondary">90 / 150</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex flex-row">
                                                <div class="p-2 d-flex w-25">
                                                    <strong class="fw-bold h5">Sexo</strong>
                                                </div>
                                                <div class="p-2 d-flex flex-column w-50">
                                                    <div class="input-group d-flex">
                                                        <input type="text" class="form-control"
                                                            placeholder="Hombre"
                                                            aria-label="Nombre de usuario del destinatario" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="p-2">
                                                <button type="button" class="btn btn-primary text-white fw-bold">Enviar</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>



                                {{-- <div class="p-2">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 d-flex">
                                            <strong class="fw-bold h5">Sitio web</strong>
                                        </div>
                                        <div class="p-2 d-flex flex-column w-50">
                                            <div class="input-group d-flex">
                                                <input type="text" class="form-control"
                                                    placeholder="Sitio web"
                                                    aria-label="Nombre de usuario del destinatario" aria-describedby="button-addon2">
                                            </div>
                                            <div class="mt-2">
                                                <p class="lh-1 text-secondary">
                                                    Ipsum deart up team hold Ipsum deart up team
                                                    deart up team hold Ipsum deart up Ipsum deart 
                                                    up team hold Ipsum Ipsum deart up Ipsum deart
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 d-flex">
                                            <strong class="fw-bold h5">Presentación</strong>
                                        </div>
                                        <div class="p-2 d-flex flex-column w-50">
                                            <div class="input-group d-flex">
                                                <div class="input-group">
                                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                                  </div>
                                            </div>
                                            <div class="mt-2">
                                                <p class="lh-1 text-secondary">90 / 150</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 d-flex">
                                            <strong class="fw-bold h5">Sexo</strong>
                                        </div>
                                        <div class="p-2 d-flex flex-column w-50">
                                            <div class="input-group d-flex">
                                                <input type="text" class="form-control"
                                                    placeholder="Sitio web"
                                                    aria-label="Nombre de usuario del destinatario" aria-describedby="button-addon2">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="p-2 d-flex flex-column border-top">item</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection