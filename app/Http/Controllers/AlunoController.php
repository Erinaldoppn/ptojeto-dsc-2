<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Aluno::all();
        
        return view('aluno-listagem', [
            'objetos' => $dados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluno-cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlunoRequest $request)
    {
        $dados_formulario = $request->validated();

        $retorno = Aluno::create($dados_formulario);

        if($retorno){
            return redirect()->route('aluno.listagem');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Curso::find($id);

        if($dado){
            return view('aluno-alterar', 
                        ['objeto' => $dado]
                    );
        }else{
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados_formulario = $request->validated();
        $registro_recuperado = Curso::find($id);

        if($registro_recuperado){
            $registro_recuperado->update($dados_formulario);
            return redirect()->route('aluno.listagem');
    
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro_recuperado = Curso::find($id);

        if($registro_recuperado){
            $registro_recuperado->delete();
            return redirect()->route('aluno.listagem');
        }else{

            return redirect()->back();
        }
    }
}
