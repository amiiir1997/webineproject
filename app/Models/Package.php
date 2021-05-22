<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;

class Package extends Model
{
    use HasFactory;

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

}
