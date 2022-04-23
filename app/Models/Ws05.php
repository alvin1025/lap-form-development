<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ws05 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function masterdevreportqard(){
        return $this->hasOne(MasterDevReportQard::class);
    }
}
