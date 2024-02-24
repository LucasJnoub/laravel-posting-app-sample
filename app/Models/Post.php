<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function unlikes(){
        return $this->hasMany(Unlike::class);
    }
    
    public function likedBy(User $user){
        return $this->likes->contains('user_id', $user->id);
    }
    public function unlikedBy(User $user){
        return $this->unlikes->contains('user_id', $user->id);
    }
}
