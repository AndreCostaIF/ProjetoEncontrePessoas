<?php

namespace App\Http\Controllers;

use App\Models\Pessoasmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('pessoas')->paginate(20);
 
        return view('welcome', ['pessoas' => $users]);
    }
    public function cadastro()
    {
        return view('cadastroPessoa');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $foto = $request->file('foto');
      
        $fotoNome = strtotime('now') . $foto->getClientOriginalName() ;
        
        $foto->move(public_path('img/fotos'), $fotoNome);
        
       

        $pessoa = New Pessoasmodel();
        $pessoa->nome =  $request->nome;
        $pessoa->endereco =  $request->endereco;
        $pessoa->numero =  $request->numero;
        $pessoa->cidade =  $request->cidade;
        $pessoa->estado =  $request->estado;
        $pessoa->contato =  $request->contato;
        $pessoa->abrigo =  $request->abrigo;
        $pessoa->foto =   $fotoNome;
        $pessoa->outros =  $request->outros;
        $pessoa->save();

        return back()->with('success', 'Salvo com sucesso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
