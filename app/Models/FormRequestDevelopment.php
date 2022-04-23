<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRequestDevelopment extends Model
{
    use HasFactory;

    protected $table = 'form_request_development';

    protected $guarded = [
        'id'
    ];

    protected $with = ['user', 'devmodel', 'formdevsales'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function formdevsales(){
        return $this->belongsTo(FormDevSales::class, 'form_dev_sales_id');
    }

    public function devmodel(){
        return $this->belongsTo(DevModel::class, 'dev_model_id');
    }

    public function masterdevreportqard(){
        return $this->hasMany(MasterDevReportQard::class);
    }

    
}
