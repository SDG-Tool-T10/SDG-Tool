<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sdg extends Model
{
    use HasFactory;

    public function subSdgs()
    {
        return $this->hasMany(SubSdg::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
