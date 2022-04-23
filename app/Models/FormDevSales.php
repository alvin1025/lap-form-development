<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormDevSales extends Model
{
    use HasFactory;

    protected $table = 'form_dev_sales';

    protected $guarded = ['id'];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function formrequestdevelopment()
    {
        return $this->hasOne(FormRequestDevelopment::class);
    }

    protected function masterdevreportqard()
    {
        return $this->hasOne(MasterDevReportQard::class);
    }
}
