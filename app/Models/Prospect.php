<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPrettyCreatedAttribute()
    {
        return date('F d, Y', strtotime($this->created_at));
    }

    protected $fillable = [
        'name',
        'email',
        'profile_image'
    ];
}
