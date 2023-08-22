<x-layout>

    <section class="bg-login" >
        <div class="container p-5">
            <div class="row justify-content-center p-5">
                <div class="col-4">

                    <!-- OUTPUT ERRORI VALIDAZIONE FORM -->

                    @if ($errors->any())

                    @error('titolo') Test errore titolo @enderror

                    @foreach ($errors->all() as $error)

                        <p style="color: red;">{{$error}}</p>

                    @endforeach

                    @endif


                    <form class="bg-light p-5 rounded-5 my-form" method="POST" action="/login">
                        <h2 class="text-center text-dark";>Accedi</h2>

                        @csrf

                        <div class="mb-3 mt-5">
                            
                            <input type="email" name="email" class="form-control rounded-2 p-3 shadow-lg" placeholder="Inserisci un email o username" id="email" value="{{old('email')}}">
                            
                        </div>

                        <div class="mb-3 mt-5">

                            <input type="password" name="password" class="form-control rounded-2 p-3 shadow-lg" placeholder="Inserisci una password" id="password"> 
                                
                        </div>
                        
                        <button type="submit" class="btn btn-dark my-btn mt-3">Accedi</button>

                    </form>

                </div>
            </div>
        </div>
    </section>


</x-layout>