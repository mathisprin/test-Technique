<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //
    protected $table = 'post';

    protected $primaryKey = 'idpost';

    public $timestamps = false;

    public function tags(){
        return $this->belongsTo(Tag::class);
    }

    public function scopeTag($query, $idTag)
    {
        return $query->where('tag_idTag', $idTag);
    }
}
