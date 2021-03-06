<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public $timestamps = false;
    public string $post_title;
    public string $post_text;


    protected $fillable = ['post_title', 'post_text'];

}
