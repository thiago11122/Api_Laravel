<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Cadastrar um produto via API
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cadastrarProduto()
    {
        //$dados = $request->all();

        echo "trouxe algo";  
    }

    /**
     * Retornar um produto via API
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function retornarProduto()
    {
        return view('home');
    }
}
