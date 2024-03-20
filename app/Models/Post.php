<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //posts -> Post
    //users -> User
    use HasFactory;

    //protected $table = 'my_posts';
    protected $fillable = [
        'title',
        'excerpt',
        'content',
    ];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
