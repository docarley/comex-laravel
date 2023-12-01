<x-layout titulo="Criar categorias">
    <form action="{{route('categorias.store')}}" method="POST">
        @csrf
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
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




