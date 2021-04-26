<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSdg extends Model
{
    use HasFactory;

    public function sdg()
    {
        return $this->belongsTo(Sdg::class);
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
