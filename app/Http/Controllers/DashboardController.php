<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

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
        $datamhs = User::where('role_id', 0)->get();
        $mhs = Status::where('id_user', $datamhs->id)->get();
        return view('dashboard.datamahasiswa', compact('mhs'));
    }
}
