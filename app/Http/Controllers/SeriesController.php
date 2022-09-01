<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::quert()->orderBy('nome')->get();
        //ultiliza-se . na separacao de diretorios
        return view(view: 'series.index')->with('series', $series);
    }

    public function create()
    {
        return view(view: 'series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
