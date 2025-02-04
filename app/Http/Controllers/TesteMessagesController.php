<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;

class TesteMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testes.messages-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {

        //= Pode fazer as regras aqui ou criar uma classe request e fazer as validações por la
        /*   $request->validate([
            'name' => 'required',
            'email' => 'email | required',
            'password' => 'required'
        ], [
            'email.email' => 'Email não é valido.'
        ]); */

        session()->flash('message', 'Cadastrado com sucesso');

        // = Redireciona de volta para a pagina que estava
        // return back();

        return view('testes.messages-view');
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
