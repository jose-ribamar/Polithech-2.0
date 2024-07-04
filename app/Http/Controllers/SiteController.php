<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Método para obter todas as categorias para o menu
    private function getCategoriasMenu()
    {
        return Categoria::all();
    }

    // Método para exibir a página inicial
    public function index()
    {
        $produtos = Produto::paginate(3);
        $categoriasMenu = $this->getCategoriasMenu();

        return view('site.home', compact('produtos', 'categoriasMenu'));
    }

    // Método para exibir os detalhes de um produto
    public function details($slug)
    {
        $produto = Produto::where('slug', $slug)->first();
        $categoriasMenu = $this->getCategoriasMenu();

        return view('site.details', compact('produto', 'categoriasMenu'));
    }

    // Método para exibir os produtos de uma categoria específica
    public function categoria($id)
    {
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate(3);
        $categoriasMenu = $this->getCategoriasMenu();

        // Verifique o nome correto da view e ajuste aqui
        return view('site.cadegoria', compact('produtos', 'categoria', 'categoriasMenu'));
    }
}
