<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercandidate extends Model
{   use HasFactory;
    protected $table = 'user_candidate';
    public $fillable = [
        'name','avatar','cate_id', 'location_id', 'gender', 'birthday', 'address', 'phone_number', 'link', 'intro', 'detail', 'created_at', 'updated_at'
    ];
    public function locations(){
        return $this->belongsTo(Locations::class , 'location_id');
    }
    public function Cate(){
        return $this->belongsTo(Categories::class , 'Cate_id');
    }
    public function user(){
        return $this->hasOne(User::class , 'id');
    }
  
}