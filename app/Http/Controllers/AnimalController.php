<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // precisa usar (), pois retorna uma instance de um relacionamento
        $animals = (new Animal())->getAllAnimals();

        $firstAnimal = (new Animal())->first();

        // relacionamento, nao tem animal instanciado por isso user nao pega dados
        $users = (new Animal())->user();

        // dd($users);

        //= nao precisa usar user(), pois o user é um relacionamento e é tratado como propriedade
        // dd($firstAnimal->user);

        return view('testes.animals', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
