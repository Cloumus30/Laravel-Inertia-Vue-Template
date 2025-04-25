<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    use HasFactory;

    protected $table = 'portos';
    protected $fillable = [
        'title',
        'short_description',
        'file_path',
        'link',
        'user_id',
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'tags_porto', 'porto_id', 'tag_id');
    }
}
