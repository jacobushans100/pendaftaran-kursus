<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';
    protected $guarded = ['id'];
    public $timestamp = false;
}
