<x-layout>

    <form action="{{route('articles.store', $article->id)}}" method="POST">
    
        @csrf

        @method('PUT')

        <input type="text" name="titolo" id="titolo" placeholder="Titolo" value="$articles->title">

        <textarea name="contenuto" id="contenuto" cols="30" rows="10" placeholder="Contenuto">{{$articles->content}}</textarea>

        <input type="submit" value="Aggiorna">
        

    </form>

    <form action="{{route('articles.destroy', $article->id)}}" method="post">

        @csrf

        @method('DELETE')

        <input type="submit" value="Elimina">

    </form>

</x-layout>