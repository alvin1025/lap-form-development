<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanInputCustomer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = "kd03";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function permintaaninputcustomer()
    {
        return $this->belongsTo(PermintaanInputCustomer::class, 'customerinput_id');
    }
}
