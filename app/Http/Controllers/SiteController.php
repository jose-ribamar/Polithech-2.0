<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;

class SiteController extends Controller
{
    // Método para obter todas as categorias
    private function getCategoriasMenu()
    {
        return Categoria::all();
    }

    public function index()
    {
        $produtos = Produto::paginate(3);
        $categoriasMenu = $this->getCategoriasMenu();

        return view('site.home', compact('produtos', 'categoriasMenu'));
    }

    public function details($slug)
    {
        $produto = Produto::where('slug', $slug)->first();
        $categoriasMenu = $this->getCategoriasMenu();

        return view('site.details', compact('produto', 'categoriasMenu'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate();
        $categoriasMenu = $this->getCategoriasMenu();

        return view('site.categoria', compact('produtos', 'categoria', 'categoriasMenu'));
    }
}
