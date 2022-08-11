<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kd14 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'kd14';

    protected function kd03()
    {
        return $this->belongsTo(Kd03::class, 'kd03_id');
    }

    protected function kd04()
    {
        return $this->belongsTo(Kd04::class, 'kd04_id');
    }

    protected function kd05()
    {
        return $this->belongsTo(Kd05::class, 'kd05_id');
    }

    protected function kd06()
    {
        return $this->belongsTo(Kd06::class, 'kd06_id');
    }

    protected function kd11()
    {
        return $this->belongsTo(Kd11::class, 'kd11_id');
    }
}
