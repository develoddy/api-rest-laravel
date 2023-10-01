@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    @include('web.stories.stories')
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Post --}}
    <div class="row mt-3 justify-content-center border border-danger">
        <div class="col col-md-8 col-lg-4 col-sm-10 col-xl-4">
            <div class="row">
                <div class="col col-lg-2 border border-primary">
                    <div><x-images.user-images></x-images.user-images></div>
                </div>
                <div class="col  border border-danger">
                    <div class="mt-0">
                        <a href="" class="text-dark fw-bold">username</a>
                        <small class="px-2 text-secondary">7h</small>
                    </div>
                    <div class="mt-0">
                        <a href="" class="text-secondary">publicidad</a>
                    </div>
                </div>
                <div class="col col-lg-2 border border-success">
                    <div class="mt-0 float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col  border border-primary">
                    <div>
                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        
        


        {{-- <div class="p-2">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <div>
                        <x-images.user-images></x-images.user-images>
                    </div>
                </div>
                <div class="p-2 flex-grow-1 d-flex align-items-center">
                    <a href="" class="text-dark">username</a> <small class="px-2">7h</small>
                </div>
                <div class="p-2 d-flex align-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="p-2">
            <div class="d-flex flex-row">
                <div class="p-2 flex-grow-1 border border-primary">
                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                    class="img-fluid" alt="...">
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
