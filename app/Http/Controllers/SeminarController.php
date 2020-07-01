<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seminar;

class SeminarController extends Controller
{
    public function index(){
        $seminars = Seminar::all();
        return view('seminar.index',['seminars' => $seminars]);
    }

    public function show(Seminar $seminar){
        return view('seminar.show',['seminar' => $seminar]);
    }

    public function create(){
        return view('seminar.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required|min:3|max:58',
            'jenis_kelamin' => 'required|in:P,L',
            'pendidikan' => 'required',
            'motivasi' => ''
        ]);
        Seminar::create($validateData);
        $request->session()->flash('pesan',"Data {$validateData['nama_lengkap']} berhasil disimpan");
        return redirect()->route('seminars.index');
    }
    public function edit(Seminar $seminar){
        return view('seminar.edit',['seminar' => $seminar]);
    }

    public function update(Request $request, Seminar $seminar)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required|min:3|max:58',
            'jenis_kelamin' => 'required|in:P,L',
            'pendidikan' => 'required',
            'motivasi' => ''
        ]);
        $seminar->update($validateData);
        return redirect()->route('seminars.show',['seminar' => $seminar->id])->with('pesan',"Update data {$validateData['nama_lengkap']} berhasil");
    }

    public function destroy(Seminar $seminar)
    {
        $seminar->delete();
        return redirect()->route('seminars.index')->with('pesan',"Data $seminar->nama_lengkap berhasil dihapus");
    }
}
