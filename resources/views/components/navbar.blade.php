            <nav class="navbar navbar-expand-lg bg-light shadow-lg" data-bs-theme="light">
                <div class="container">
                  <a class="navbar-brand ms-5 fs-4 my-shadow" href="/">Jody_Blog</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto ms-auto  fs-6">
                      <li class="nav-item ms-5">
                        <a class="bg-aqua nav-link rounded-2 text-white me-2 shadow-lg" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link bg-orange rounded-2 text-white me-2 shadow-lg" href="/profilo">Profilo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link bg-success me-2 rounded-2 text-white shadow-lg" href="/articoli">Tutti i post</a>
                      </li>
                      @if (auth()->check())
                      <li class="nav-item">
                        <a class="nav-link bg-secondary rounded-2 text-white shadow-lg" href="/articoli/aggiungi">Pubblica il tuo primo post</a>
                      </li>
                      @endif
                    </ul>

                    @if (!auth()->check())
                      <form class="d-flex">
                        <a href="/login" class="btn btn-success my-2 my-sm-0">Accedi</a>
                        <a href="/register" class="btn btn-danger mx-2 my-2 my-sm-0">Registrati</a>
                      </form>
                     @else
                     
                        <form action="/logout" method="post">

                            @csrf

                            <input type="submit" class="btn btn-danger mx-2 my-2 my-sm-0" value="Logout">


                        </form>

                    @endif

                  </div>
                </div>
            </nav>