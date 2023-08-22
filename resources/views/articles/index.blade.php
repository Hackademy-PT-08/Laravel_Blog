<x-layout>

    

<section class="light">
	<div class="container py-2">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">Tutti i post</div>

        @foreach ($articles as $article)

            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="{{$article->title}}" />
                </a>
                <div class="postcard__text t-dark">
                    <h2><a href="#">{{$article->title}}</a></h2>
                    <h5>Pubblicato da: {{$article->user->name}} </h3>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{$article->content}}</div>
                </div>
            </article>
		
        @endforeach    
        
	</div>
</section>


    
         
</x-layout>