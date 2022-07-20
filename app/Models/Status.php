<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $guarded = ['id'];
    public $timestamp = false;
    public function user()
    {
        return $this->belongsTo('App\models\User');
    }
    public function data_mahasiswa()
    {
        return $this->belongsTo('App\models\Data_mahasiswa');
    }
}
