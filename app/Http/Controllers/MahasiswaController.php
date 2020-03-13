<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use SweetAlert;
Use Alert;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = [
            ['no' => '1','class' => '6A','nama' => 'Ari'],
            ['no' => '2','class' => '6B','nama' => 'Badi'],
            ['no' => '3','class' => '6C','nama' => 'Canti'],
            ['no' => '4','class' => '6D','nama' => 'Didi']

        ];

        if($request->query('class')){
            $mahasiswa = array_filter($mahasiswa, function($class){
                return $class['class'] == request()->class;
            });
        }

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function create(){
        return view('create'); 
    }

    public function store(Request $request){
        $name = $request->name;
        alert()->success('Data mahasiswa '.$name.' berhasil tambah.');
        return redirect('mahasiswa');
    }

    public function show($mahasiswa){
        $mahasiswas = [
            ['no' => '1','class' => '6A','nama' => 'Ari'],
            ['no' => '2','class' => '6B','nama' => 'Badi'],
            ['no' => '3','class' => '6C','nama' => 'Canti'],
            ['no' => '4','class' => '6D','nama' => 'Didi']

        ];

        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->mahasiswa;
            });
        }

        return view('detail', compact('mahasiswas')); 
    }

    public function edit($mahasiswa){
        $mahasiswas = [
            ['no' => '1','class' => '6A','nama' => 'Ari'],
            ['no' => '2','class' => '6B','nama' => 'Badi'],
            ['no' => '3','class' => '6C','nama' => 'Canti'],
            ['no' => '4','class' => '6D','nama' => 'Didi']
        ];


        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->mahasiswa;
            });
        }

        return view('edit', compact('mahasiswas'));        
    }

    public function update(Request $request){
        
        if($request->old_name == $request->name){
            alert()->error('Gagal!','Nama masih sama');
            return redirect('/mahasiswa');
        }else{
            alert()->success('Data mahasiswa ubah');
            return redirect('/mahasiswa');
        }
    }

    public function destroy(Request $request){
        $nama = $request->name;
        // SweetAlert::message('Berhasil! Data mahasiswa '.$nama.' berhasil dihapus.');
        // alert()->success('Data mahasiswa '.$nama.' berasil dihapus.');
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}
