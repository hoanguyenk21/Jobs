<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRecruitment extends Model
{
    use HasFactory;
    protected $table = 'user_recruitment';
    public $fillable = [
        'name','location_id','cate_id','avatar','image','banner','company_size','phone','tax_code','date_start','intro','detail','address','map','slug'
    ];
}
