<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevModel extends Model
{
    use HasFactory;

    protected $table = 'dev_models';

    // protected $with = ['marketing'];

    protected function formrequestdevelopment(){
        return $this->hasOne(FormRequestDevelopment::class, 'form_request_development_id');
    }
}
