<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class RFQModel extends Model
{
    use HasFactory;
    use HasApiTokens, Notifiable;
    protected $table = 'tbl_rfq';

    protected $fillable = [
        'id',
        'pr_id',
        'rfq_no',
        'rfq_date',
        'particulars',
        'mode_id',
        'updated_by'
   
    ];
}


