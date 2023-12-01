<x-layout titulo="Categorias">
    <nav>
        <a href="{{route('categorias.create')}}">Criar Categoria</a>
    </nav>
    @if (session('mensagemSucesso'))
    <p>
        {{session('mensagemSucesso')}}
    </p>
    @endif
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            {{$categoria->nome}}
        </li>
        @endforeach
    </ul>
</x-layout>