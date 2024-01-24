<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function videoFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like' , '%' .rqeuest('search') . '%');
        }
    }

    protected $fillable=[
        'name'
    ];
}
