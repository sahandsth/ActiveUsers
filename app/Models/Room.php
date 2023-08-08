<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['player_count','user_id'];

    public function host(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function users(){
        return $this->belongsToMany(User::class,'room_users','room_id','user_id')->withTimestamps();
    }
    use HasFactory;
}
