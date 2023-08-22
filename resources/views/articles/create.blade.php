<x-layout>

<section class="bg-secondary" >
        <div class="container p-5">
            <div class="row justify-content-center p-5">
                <div class="col-4">


                    <form class="bg-light p-5 rounded-5 my-form" method="POST" action="{{route('articles.store')}}">
                        <h2 class="text-center text-dark";>Aggiungi un post</h2>

                        @csrf

                        <div class="mb-3 mt-5">
                            
                            <input type="text" name="titolo" class="form-control rounded-2 p-3 shadow-lg" placeholder="Inserisci un titolo" id="titolo">
                            
                        </div>

                        <div class="mb-3 mt-5">

                            <textarea name="contenuto" id="contenuto" cols="10" rows="5" placeholder="Inserisci una descrizione.." class="form-control shadow-lg"></textarea>    
                        
                        </div>

                        <div class="mb-3 mt-5">

                            <input type="file" name="immagine" class="form-control shadow-lg" id="immagine">

                        </div>
                        
                        <button type="submit" class="btn btn-dark my-btn mt-3">Pubblica</button>

                    </form>

                </div>
            </div>
        </div>
    </section>

   

</x-layout>