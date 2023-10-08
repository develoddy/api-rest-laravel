@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 col-sm-12 col-xl-12 col-lg-12">
                <div class="card border-0">
                    <div class="card-header d-none">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Para ti') }}
                    </div>
                    <div class="card-body">
                        @include('web.stories.stories-home')
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2 mb-0 justify-content-center">
            <div class="col col-md-8 col-lg-6 col-sm-10 col-xl-5 p-0">
                <div class="card mb-3 border-0">
                    <div class="card-header border-0">
                        <div class="d-flex">
                            <div class="p-2">
                                <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    class="" alt="..." style="border-radius: 50%; height: 50px; width: 50px;">
                            </div>
                            <div class="p-2 flex-grow-1">
                                <div class="d-flex flex-column">
                                    <div class="p-0"><a href="" class="text-black fw-bold">username</a><span
                                            class="text-secondary px-2">7h</span></div>
                                    <div class="p-0 text-secondary"><span>Publicidad</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 align-self-center">
                                <div class="cursor-pointer" onclick="showModal('info')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </div>
                                @include('web.modals.modal-option-post')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                        class="img-fluid" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                        <path
                                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-2 flex-grow-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                        <path
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-2">
                                <div>
                                    <x-avatar
                                        image="{{ Vite::asset('resources/images/users/doc.png') }}"
                                        stacked="true" 
                                        size="small" />
                                    <x-avatar
                                        image="{{ Vite::asset('resources/images/users/francis.png') }}"
                                        stacked="true" 
                                        size="small" />
                                    <x-avatar
                                        image="{{ Vite::asset('resources/images/users/issah.jpg') }}"
                                        stacked="true" 
                                        size="small" />
                                    <x-avatar
                                        image="{{ Vite::asset('resources/images/users/rowe.jpeg') }}"
                                        stacked="true" 
                                        size="small" />

                                </div>
                            </div>
                            <div class="p-4 mr-3 pt-3">
                                <a href="" class="fw-bold text-black">1.105.293 Me gusta</a>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-2">
                                <p class="lh-1">
                                    description de la publicacion description de la publicacion description de la
                                    publicacion description de la publicacion
                                    description de la publicacion description de la publicacion description de la
                                    publicacion
                                </p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-2">
                                <a onclick="showModal('form-mode-simple')" class="text-secondary cursor-pointer">Ver los 23.252 comentarios</a>
                                @include('web.modals.modal-comment')
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2">
                                <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    class="" alt="..." style="border-radius: 50%; height: 50px; width: 50px;">
                            </div>
                            <div class="p-2 flex-grow-1">
                                <div class="d-flex flex-column">
                                    <div class="p-0"><a href="" class="text-black fw-bold">username</a></div>
                                    <div class="p-0">
                                        <p class="lh-1">
                                            Description del comentario. Esta bonito la publicacion que estas maquetando,
                                            quiza te puede seguir quedaando bonio
                                            a publicacion que estas maquetando, quiza te puede seguir quedaando
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 align-self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-0 border-bottom text-muted">
                        <div class="d-flex flex-column">
                            <div class="p-2">
                                <div class="input-group mb-0 mt-0">
                                    <input type="text" class="form-control border-0"
                                        placeholder="Añade un comentario..."
                                        aria-label="Nombre de usuario del destinatario" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
