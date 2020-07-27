<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Complaint extends Model
{
    protected $table = 'complaints';
    protected $fillable = ['email', 'company_name', 'complaint_title', 'complaint_body', 'is_letted'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function comments()
    {
        return $this->hasMany(PostComment::class,'complaint_id','id');
    }
}
