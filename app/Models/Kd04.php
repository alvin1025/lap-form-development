<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kd04 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'kd04';

    protected function kd05()
    {
        return $this->belongsTo(Kd05::class, 'kd05_id');
    }

    protected function kd03()
    {
        return $this->belongsTo(Kd03::class, 'kd4no_cust', 'no_cust');
    }

    protected function kd06()
    {
        return $this->belongsTo(Kd06::class, 'kd06_id');
    }

    protected function kd11()
    {
        return $this->belongsTo(Kd11::class, 'kd11_id');
    }

    protected function kd14()
    {
        return $this->belongsTo(Kd14::class, 'kd14_id');
    }
}
