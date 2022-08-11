<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentMaster extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function vs04()
    {
        return $this->belongsTo(Vs04::class, 'agent', 'agent');
    }

}
