<?php

namespace App\Http\Controllers;
use App\Lente;
use Illuminate\Http\Request;

class ControladorLentes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lentesj = Lente::all();
        $lentes = json_decode($lentesj);
        return view('lentes',compact('lentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $lente = new Lente;
        $lente->nome = $request->nome;
        $lente->preco = $request->preco;
        $lente->desconto = $request->desconto;
        $lente->codigo = $request->codigo;
        $lente->marca = $request->marca;
        $lente->info = $request->info;
        $lente->categoria = $request->categoria;
        $lente->fretegratis = true;
        $lente->ativo = true;
        $lente->destaque = false;
        $lente->save();
        return redirect()->route('lentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function retornaLentes(){
        $lentes = Lente::all();
        return json_encode($lentes);
    }

}
