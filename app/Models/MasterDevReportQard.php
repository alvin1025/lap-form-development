<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDevReportQard extends Model
{
    use HasFactory;

    protected $table = 'dev_report_qards';

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function formrequestdevelopment(){
        return $this->belongsTo(FormRequestDevelopment::class. 'form_request_development_id');
    }

    protected function formdevsales(){
        return $this->belongsTo(FormDevSales::class, 'form_dev_sales_id');
    }

    public function ws03(){
        return $this->belongsTo(Ws03::class, 'ws03_id');
    }
    public function ws05(){
        return $this->belongsTo(Ws05::class, 'ws05_id');
    }

}
