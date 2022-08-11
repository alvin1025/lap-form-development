<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kd03 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'kd03';
    // protected $with = ['kd06'];



    protected function kd05()
    {
        return $this->belongsTo(Kd05::class);
    }

    protected function kd04()
    {
        return $this->belongsTo(Kd04::class);
    }

    protected function kd06()
    {
        return $this->belongsTo(Kd06::class, 'no_cust');
    }

    protected function kd11()
    {
        return $this->belongsTo(Kd11::class);
    }

    protected function kd14()
    {
        return $this->belongsTo(Kd14::class);
    }
}
