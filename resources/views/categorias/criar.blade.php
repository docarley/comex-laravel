<x-layout titulo="Criar categorias">    
    <form action="{{route('categorias.store')}}" method="POST">        
    @csrf
    @if ($errors->any())   
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    <div>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Cadastrar">
    </div>
    @if (session('mensagemSucesso'))
    <p>
        {{session('mensagemSucesso')}}
    </p>
    @endif
    </form>
</x-layout>

<!-- php artisan make:request CategoriaStoreRequest 

Na classe criada
 - Retornar True no metodo authorize
 - Editar o metodo rule
    return ['nome',['required','string','min:3']]
 - Na controller fazer com que seja passado o parâmetro CategoriaStoreRequest em store
 - Adicionar na classe CategoriaStoreRequest
    public function messages(){
        return[
            'required'=>"O campo :attribute deve ser preenchido",
            'min'=>"O campo :attribute deve ter no mínimo :min caractere(s)"];
    }



-->