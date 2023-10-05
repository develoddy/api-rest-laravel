@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col p-2">
            <div class="d-flex flex-row border border-top">
                 {{-- Item 1 --}}
                <div class="p-2 border border-right" style="width: 40%; height:10%; min-height: 80vh;">
                    <div class="d-flex flex-column">
                        <div class="p-2 d-flex flex-row">
                            <div class="p-2 flex-grow-1 fw-bold h4">username</div>
                            <div class="p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </div>
                        </div>
                        {{-- Contactos --}}
                        <div class="p-0 d-flex">
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-grow-1 d-flex align-items-center">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    class="" alt="..." style="border-radius: 50%; height: 50px; width: 50px;">
                                </div>
                            <div class="p-2 flex-column">
                                <div class="p-0">username lastname</div>
                                <div class="p-0"><small class="text-secondary">Última actividad hace 36 min.</small></div>
                            </div>
                            </div>
                        </div>
                        <div class="p-0 d-flex">
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-grow-1 d-flex align-items-center">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    class="" alt="..." style="border-radius: 50%; height: 50px; width: 50px;">
                                </div>
                            <div class="p-2 flex-column">
                                <div class="p-0">usernameeee lastnameeeee</div>
                                <div class="p-0"><small class="text-secondary">Última actividad hace 36 min.</small></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="p-2 w-100 ">
                    <div class="d-flex flex-row border-bottom">
                        <div class="p-2">
                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    class="" alt="..." style="border-radius: 50%; height: 50px; width: 50px;">
                        </div>
                        <div class="p-2 d-flex flex-column flex-grow-1">
                            <div class="p-0">username lastname</div>
                            <div class="p-0"><small class="text-secondary">Última actividad hace 36 min.</small></div>
                        </div>
                        <div class="p-2 d-flex flex-row">
                            <div class="p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </div>
                            <div class="p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
                                </svg>
                            </div>
                            <div class="p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                  </svg>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column" style="height: 90%;">
                        <div class="p-2 flex-grow-1">item</div>

                        <div class="p-2 d-flex flex-column border-top">
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
</div>
@endsection