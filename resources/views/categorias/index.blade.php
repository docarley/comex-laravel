<x-layout titulo="Categorias">
    <nav>
        <a href="{{route('categorias.create')}}">Criar Categoria</a>
    </nav>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            {{$categoria->nome}}
        </li>
        @endforeach
    </ul>    
</x-layout>