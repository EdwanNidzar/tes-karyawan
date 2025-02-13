<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\User;

class AbsensiContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensis = Absensi::with('user')->get();
        return view('absensi.index', compact('absensis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('absensi.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
        ]);

        $absensis = new Absensi;
        $absensis->user_id = $request->user_id;
        $absensis->tanggal = $request->tanggal;
        $absensis->status = $request->status;
        $absensis->save();

        return redirect()->route('absensis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $absensi = Absensi::with('user')->find($id);
        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $absensi = Absensi::find($id);
        $users = User::all();
        return view('absensi.edit', compact('absensi', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
        ]);

        $absensis = Absensi::find($id);
        $absensis->user_id = $request->user_id;
        $absensis->tanggal = $request->tanggal;
        $absensis->status = $request->status;
        $absensis->save();

        return redirect()->route('absensis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $absensis = Absensi::find($id);
        $absensis->delete();

        return redirect()->route('absensis.index');
    }
}
