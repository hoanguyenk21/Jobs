<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'apply';
    public $fillable = [
        'user_candidate_id', 'blog_id','name_candidate', 'phone_candidate','email_candidate', 'file','message', 'status', 'created_at'
    ];
    public function usercandidate(){
        return $this->belongsTo(Usercandidate::class, 'user_candidate_id');
    }
    public function blogs(){
        return $this->belongsTo(Blog::class, 'blog_id');
    }
   
}