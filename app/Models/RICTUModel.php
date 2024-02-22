<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Notifications\Notifiable;

class RICTUModel extends Model
{
    use HasFactory;
    use HasApiTokens, Notifiable;
    protected $table = 'tbl_technicalassistance';
    protected $fillable = [
        'id',
        'control_no',
        'request_by',
        'request_date',
        'office_id',
        'request_type_category_id',
        'request_type_id',
        'ict_officer_remarks',
        'assign_ict_officer',
        'started_date',
        'completed_date',
        'status_id',
    ];
}
