<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaStoreRequest;

class CategoriasController extends Controller
{
    public function index()
    {
        // $categorias =[
        // 'Celulares',
        // 'Informática',
        // 'Móveis',
        // 'Automotiva',
        // 'Livros',
        // 'Beleza',
        // 'Esporte',
        // 'Luxo'
        // ];

        $categorias = Categoria::query()->orderBy('nome')->get();


        return view('categorias.index')->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categorias.criar');
    }

    public function store(CategoriaStoreRequest $request)
    {


        // $categoria = new Categoria();
        // $categoria->nome = $request->input('nome') // ou $request->nome         
        // $categoria->save();
        //OU
        // Categoria::create([
        //      'nome'=>$request->input('nome')   // ou $request->nome
        // ]);


        Categoria::create([
            'nome' => $request->nome
        ]);

        

        return redirect(route('categorias.index'))->with(['mensagemSucesso'=>'Categoria criada com sucesso!']);
    }
}


