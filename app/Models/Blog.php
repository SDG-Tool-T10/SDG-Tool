<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function researchGroup()
    {
        return $this->belongsTo(ResearchGroup::class);
    }

    public function businessOperation()
    {
        return $this->belongsTo(BusinessOperation::class);
    }

    public function sdg()
    {
        return $this->belongsTo(Sdg::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
