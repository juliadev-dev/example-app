<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_pasien extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cekpasien()
    {
        return $this->hasMany(Status_pasien::class);
    }
}
