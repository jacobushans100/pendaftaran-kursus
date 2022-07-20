<?php

namespace App\Http\Controllers;

use App\Models\Data_mahasiswa;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
    public function data_Mahasiswa()
    {
        $mhs = User::where('role_id', 0)->get();
        $datamhs = User::where('role_id', 0)->first();
        $mhs1 = Data_mahasiswa::where('id_user', $datamhs->id)->get();
        // return $datamhs->id;
        // return $mhs1;
        $title = 'Data Mahasiswa';
        return view('dashboard.datamahasiswa', compact('mhs', 'mhs1', 'title'));
    }

    public function tmbhMhs()
    {
        return view('dashboard.tambahmahasiswa', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    public function tmbhdataMhs(Request $request)
    {
        // return $request;
        $validatedData = $request->all();
        // $validatedData = $request->validate([
        //     'name' => ['required', 'max:30'],
        //     'npm' => ['required'],
        //     'password' => ['required', 'min:5', 'max:20'],
        // ]);
        $validatedData['role_id'] = 0;
        $validatedData['password'] = Hash::make($validatedData['password']);
        // return $validatedData;
        User::create($validatedData);
        return redirect('/dataMahasiswa')->with('success', 'berhasil menambahkan mahasiswa!');
    }

    public function editmhs($id)
    {
        $datamhs = User::findOrFail($id);
        // return $datamhs;
        $title = 'Edit Mahasiswa';
        return view('dashboard.editdatamhs', compact('datamhs', 'title'));
    }
    public function ubahmhs(Request $request, $id)
    {
        // return $id;
        // $dataLama = User::findOrFail($id);
        $datamhs = $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'kelas' => 'required',
        ]);
        User::where('id', $id)->update($datamhs);
        return redirect('/dataMahasiswa')->with('success', 'berhasil menambahkan mahasiswa!');
    }
    public function dataPngjn()
    {
        $datamhs = User::where('role_id', 0)->first();
        $mhs1 = Data_mahasiswa::where('id_user', $datamhs->id)->get();
        $title = 'Data pengajuan';
        return view('dashboard.dataPengajuan', compact('title', 'mhs1'));
    }
}
