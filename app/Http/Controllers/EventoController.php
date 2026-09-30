<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

/**
 * Exibe a listagem de eventos no painel administrativo com suporte a filtro.
 */
class EventoController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->input('busca');

        if ($busca) {
            $eventos = Evento::where('titulo', 'like', "%{$busca}%", 'and')
                ->orderBy('titulo', 'asc')
                ->get();
        } else {
            $eventos = Evento::orderBy('titulo', 'asc')->get();
        }

        // Retorna a view do painel passando a coleção de eventos e o termo pesquisado
        return view('eventos.index', compact('eventos', 'busca'));
    }

    /**
     * Exibe o formulário de cadastro de novo evento.
     */
    public function create()
    {
        return view('/eventos.create');
    }

    /**
     * Salva um novo evento no banco de dados.
     */
    public function store(Request $request)
    {
        $dadosEvento = $request->validate([
            'titulo' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'vagas' => 'required|integer|min:1',
            'preco_inscricao' => 'required|numeric|min:0',
        ], [
            'titulo.required' => 'O campo título é obrigatório.',
            'local.required' => 'O campo local é obrigatório.',
            'vagas.required' => 'O campo vagas é obrigatório.',
            'vagas.integer' => 'O campo vagas deve ser um número inteiro.',
            'vagas.min' => 'O campo vagas deve ter pelo menos 1 vaga.',
            'preco_inscricao.required' => 'O campo preço de inscrição é obrigatório.',
            'preco_inscricao.min' => 'O campo preço de inscrição deve ser um valor positivo.',
            'preco_inscricao.numeric' => 'O campo preço de inscrição deve ser um valor valido.',
        ]);

        Evento::create($dadosEvento);

        return redirect('/eventos')->with('sucesso', 'evento cadastrado com sucesso!!');
    }
}
