<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = User::all();
        return view('users.index', compact('usuario'));
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
        $usuario = User::find($id);
        return view('users.editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {

        $usuario->name = $request->name;
        $usuario->apellidos = $request->apellidos;
        $usuario->empleado = $request->empleado;
        $usuario->email = $request->email;
        $usuario->password->PASSWORD_BCRYPT = $request->password;
        $usuario->puesto = $request->puesto;
        $usuario->rol = $request->rol;
        $usuario->save();

        $usuario = User::all();
        return view('users.index', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {

        $usuario->delete();
        $usuario = User::all();
        return view('users.index', compact('usuario'));
    }
}
