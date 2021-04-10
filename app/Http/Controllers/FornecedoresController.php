<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedoresController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fornecedorGrid = DB::table('fornecedores')->get();
        return view('pggrid', ['listFornecedores' => $fornecedorGrid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $title = 'Fornecedores';

        $action = "/fornecedores/store";

        return view('pgform', ['titulo' => $title, 'action' => $action]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $title = 'Fornecedores';

        $fornecedor = new Fornecedores();
        $fornecedor->nome = $request->nome;
        $fornecedor->site = $request->site;
        $fornecedor->uf = $request->uf;
        $fornecedor->email = $request->email;
        $fornecedor->save();
//        Redirector::route('fornecedores', ['titulo', $title]);
        return redirect()->route('fornecedores')->with('message', 'sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     * Formulário com os dados carregados para edição
     */
    public function edit(Fornecedores $fornecedores, $id)
    {
        //

        $title = 'Fornecedores';
        $action = "/fornecedores/update";

        $fornecedorGrid = DB::table('fornecedores')->where('id', $id)->get();

        return view('pgform', ['titulo' => $title, 'dataFornecedor' => $fornecedorGrid, 'action' => $action]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedores $fornecedores)
    {
        //
    }
}
