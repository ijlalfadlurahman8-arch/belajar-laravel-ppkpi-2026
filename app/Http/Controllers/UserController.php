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
        $users = User::get();
        $title = 'Manajemen User';
        return view('user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah User Baru";
        return view('user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // be dan dari fe
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        user::create($validated);
        // return redirect()->route('user.index');
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
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
        $title = "Ubah Data User";
        $editUser = User::findOrFail($id); //404
        return view('user.edit', compact('title', 'editUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        if($request->filled('password')){
            $user->password = $validated['password'];
        }
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
