<div class="carousel js-carousel">
	<div class="carousel__container js-carousel-container">
		<div class="carousel__list js-carousel-list">
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/doc.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/francis.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/issah.jpg') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/rowe.jpeg') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/audrey.jpeg') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/doc.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/francis.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/issah.jpg') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/audrey.jpeg') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
			<div class="carousel__item js-carousel-item">
                <div class="d-flex w-100 h-100">
                    <img src="{{ Vite::asset('/resources/images/users/doc.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
		</div>
	</div>
	<div class="carousel__nav">
        <button class="carousel__button--prev js-carousel-button  btn btn-light bg-ling px-1" data-dir="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </button>

		<button class="carousel__button--next js-carousel-button btn btn-light bg-ling px-1" data-dir="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
            </svg>
        </button>
	</div>
</div>


{{-- 
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-row">
                    <div class="p-2 text-center">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                class="img-fluid" alt="..."
                                style="border-radius: 50%; height: 77px; width: 77px;">
                        </a>
                        <a href="" class="text-black text-decoration-none">username</a>
                    </div>
                    <div class="p-2 text-center">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                class="img-fluid" alt="..."
                                style="border-radius: 50%; height: 77px; width: 77px;">
                        </a>
                        <a href="" class="text-black text-decoration-none">username</a>
                    </div>
                    <div class="p-2 text-center">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                class="img-fluid" alt="..."
                                style="border-radius: 50%; height: 77px; width: 77px;">
                        </a>
                        <a href="" class="text-black text-decoration-none">username</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> --}}
