<x-modal size="xl" backdrop_can_close="false" name="form-mode-simple" ok_button_label="" show_action_buttons="false">
    <form method="post" action="" class="profile-form-simple">
        @csrf
        <div class="card border-0">
            <div class="card-body p-0">
                <div class="d-flex">
                    <div class="d-inline-flex w-50 p-0">
                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                            class="img-fluid">
                    </div>
                    <div class="p-0 w-50 d-flex flex-column">
                        <div class="p-0">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                        style="border-radius: 50%; height: 50px; width: 50px;">
                                </div>
                                <div class="p-2 flex-grow-1">
                                    <div class="d-flex flex-column">
                                        <div class="p-0">usuarios</div>
                                        <div class="p-0">publicidad</div>
                                    </div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="align-self-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 d-flex flex-row">
                            <div class="px-2">item</div>
                            <div class="p-1 lh-1">
                                <p>ipsum verty ipsum verty ipsum verty ipsum verty ipsum
                                    verty</p>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            {{-- Comentarios list --}}
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="" alt="..."
                                                style="border-radius: 50%; height: 50px; width: 50px;">
                                        </div>
                                        <div class="p-2 flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <div class="p-0"><a href=""
                                                        class="text-black fw-bold">username</a>
                                                </div>
                                                <div class="p-0">
                                                    <p class="lh-1">
                                                        Ipsum verty dot it darty Ipsum verty
                                                        dot it darty Ipsum verty dot it
                                                        darty
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
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                                class="" alt="..."
                                                style="border-radius: 50%; height: 50px; width: 50px;">
                                        </div>
                                        <div class="p-2 flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <div class="p-0"><a href=""
                                                        class="text-black fw-bold">username</a>
                                                </div>
                                                <div class="p-0">
                                                    <p class="lh-1">
                                                        Ipsum verty dot it darty Ipsum verty
                                                        dot it darty Ipsum verty dot it
                                                        darty
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
                                </li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="p-2">
                                <div class="input-group mb-0 mt-0">
                                    <input type="text" class="form-control border-0"
                                        placeholder="Añade un comentario..."
                                        aria-label="Nombre de usuario del destinatario"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button"
                                        id="button-addon2">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-modal>
