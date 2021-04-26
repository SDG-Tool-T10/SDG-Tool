<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function researchGroup()
    {
        return $this->belongsTo(ResearchGroup::class);
    }

    public function businessOperation()
    {
        return $this->belongsTo(BusinessOperation::class);
    }

    public function sdgs()
    {
        return $this->belongsToMany(Sdg::class);
    }

    public function subSdgs()
    {
        return $this->belongsToMany(SubSdg::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
