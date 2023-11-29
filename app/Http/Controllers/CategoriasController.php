<?php 

namespace App\Http\Controllers;

use Illuminate\http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $categorias =[
        'Celulares',
        'Informática',
        'Móveis',
        'Automotiva',
        'Livros',
        'Beleza',
        'Esporte',
        'Luxo'
        ];

        return view('categorias.index')->with('categorias',$categorias);
    }
}