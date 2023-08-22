<x-layout>

    <section class="vh-100 bg-profile" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('image/jody_avatar.jpeg') }}"
                        class="img-fluid mt-2"
                        style="width: 200px; height: 200px; border-radius: 10px;">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1 fs-3">{{$user->name}}</h5>
                        <p class="mb-2 pb-1" style="color: #2b2a2a;">Junior Developer</p>
                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #efefef;">
                        Sono una giovane ed aspirante figura nel campo dello sviluppo web!
                        </div>
                        <div class="d-flex pt-1">
                        <button type="button" class="btn btn-primary flex-grow-1">Aggiorna Info</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</x-layout>