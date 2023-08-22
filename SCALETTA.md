1-installare bootstrap (npm i)
2-crei il layout e integri la direttiva @vite()->vite.config
3-creare la cartella components con i relativi componenti per le viste
4-creare una cartella per ogni tipologia di vista(home, articles, users, etc...) ->home.index
5-per creare controller, model, migration puoi fare php artisan make:model NomeDelModello -crm
6-popolare le migration
7-php artisan migrate e scrivi tutte le tabelle nel db
8-homepage(di tutti) dove cicli tutti gli articoli di tutti gli utenti '/'->HomeController::class, 'index'
9-nel controller passi i dati alla vista con il metodo All sul Model -> $articles = Article::All();
metodo index dell'HomeController:
	public function index(){
		$articles = Article::All();
		return view ('home.index', ['articles'=>$articles]);
	}
10-strutturare i metodi CRUD per gli articolo -> ArticleController