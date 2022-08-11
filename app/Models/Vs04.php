<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vs04 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function agentmaster()
    {
        return $this->hasOne(AgentMaster::class, 'agent', 'agent');
    }
}
