<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class DeskripsiWisata extends Model
{
    use Sluggable;
    protected $fillable = [
        'judul',
        'deskripsi',
        'map',
        'video',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
