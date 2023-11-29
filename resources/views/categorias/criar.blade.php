<x-layout titulo="Criar categorias">    
    <form action="{{route('categorias.store')}}" method="POST">        
    @csrf   
    <div>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Cadastrar">
    </div>
    </form>
</x-layout>