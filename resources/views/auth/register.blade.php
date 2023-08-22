<x-layout>

    <section class="bg-register" >
        <div class="container p-5">
            <div class="row justify-content-center p-5">
                <div class="col-4">
        

                    <form class="bg-light p-5 rounded-5 my-form" method="POST" action="/register">
                            
                        <h2 class="text-center text-dark">Registrati</h2>

                        @csrf

                        <div class="mb-3 mt-5">
                            <input type="text" class="form-control rounded-2 p-3 shadow-lg" name="name" placeholder="Inserisci nome utente" value="{{old('name')}}">
                        </div>

                        <div class="mb-3 mt-2">

                        <!-- CONTROLLO ERRORE NOME UTENTE -->

                            @if ($errors->any())

                                <p style="color: red;">{{$errors->first('name')}}</p>

                            @endif
                            
                            
                            <input type="email" name="email" class="form-control rounded-2 p-3 shadow-lg" placeholder="Inserisci un email" id="email" value="{{old('email')}}">
                        </div>
                        <div class="mb-3 mt-2">

                        <!-- CONTROLLO ERRORE EMAIL -->

                            @if ($errors->any())
                            
                                <p style="color: red;">{{$errors->first('email')}}</p>

                            @endif

                            <input type="password" name="password" class="form-control rounded-2 p-3 shadow-lg" placeholder="Inserisci una password" id="password">                   
                        </div>

                        <div class="mb-3 mt-2">

                            <input type="password" class="form-control rounded-2 p-3 shadow-lg" placeholder="Conferma la password" name="password_confirmation">

                         <!-- CONTROLLO ERRORE PASSWORD CONFERMA -->

                            @if ($errors->any())

                                <p style="color: red;">{{$errors->first('password')}}</p>

                            @endif

                        </div>

                        <button type="submit" class="btn btn-dark my-btn mt-3 rounded-2">Registrati</button>

                
                    </form>
                </div>
            </div>
        </div>
    </section>


</x-layout>