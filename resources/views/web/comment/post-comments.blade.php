@extends('layouts.app')

@section('title', 'Home')

@section('content')

<form method="post" action="" class="profile-form-simple">
    @csrf
    <div class="card mb-3">
        {{-- <div class="card-header">
            <p>header</p>
        </div> --}}
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col col-md-6 col-lg-8 col-sm-8">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80" class="mg-fluid img-thumbnail border-0 rounded-0" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column" style="height: 100%;width: 100%; position: relative;">
                                <div class="p-2 d-flex flex-row">
                                    <div class="p-2">
                                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80" style="border-radius: 50%; height: 50px; width: 50px;">
                                    </div>
                                    <div class="p-2 flex-grow-1 d-flex flex-column">
                                        <div class="p-0"><a href="" class="text-black text-decoration-none">username</a></div>
                                        <div class="p-0"><span class="text-secondary">Publicidad<span></div>
                                    </div>
                                    <div class="p-2 border border-warning">
                                        <div class="mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 bg-info">
                                    <p class="lh-1">
                                        description de la publicacion description de la publicacion description de la publicacion description de la publicacion
                                    </p>
                                </div>
                                {{-- <div class="d-flex flex-column min-vh-100"> --}}
                                <div class="" style="height: 100%; overflow-y: auto; position: relative;">
                                    <div class="d-flex flex-column border border-danger" style="width: 100%; height: calc(100% - 32px) !important;">
                                       <div class="d-flex flex-column flex-grow-1">
                                        grow (fill)
                                       </div>
                                    </div>
                                    <div class="border border-primary d-flex flex-column">
                                        <div>item</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card-footer border-bottom text-muted">
            <p>footer</p>
        </div> --}}
    </div>
</form>

@endsection