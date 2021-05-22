<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Package;

class Attribute extends Model
{
    use HasFactory;

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

}
