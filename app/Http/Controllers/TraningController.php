<?php

namespace App\Http\Controllers;

use App\Models\Traning;
use App\Models\User;
use Illuminate\Http\Request;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tranings = Traning::with('user')->get();
        return view('traning.index', compact('tranings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('traning.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama_traning' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        $traning = new Traning();
        $traning->user_id = $request->user_id;
        $traning->nama_traning = $request->nama_traning;
        $traning->tanggal_mulai = $request->tanggal_mulai;
        $traning->tanggal_selesai = $request->tanggal_selesai;

        $traning->save();

        return redirect()->route('traning.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $traning = Traning::with('user')->find($id);
        return view('traning.show', compact('traning'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $traning = Traning::with('user')->find($id);
        return view('traning.edit', compact('traning', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'nama_traning' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        $traning = Traning::find($id);
        $traning->user_id = $request->user_id;
        $traning->nama_traning = $request->nama_traning;
        $traning->tanggal_mulai = $request->tanggal_mulai;
        $traning->tanggal_selesai = $request->tanggal_selesai;

        $traning->update();

        return redirect()->route('traning.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $traning = Traning::find($id);
        $traning->delete();

        return redirect()->route('traning.index');
    }
}
