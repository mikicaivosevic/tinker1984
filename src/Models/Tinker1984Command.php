<?php

namespace Abstractrs\Tinker1984\Models;

use Illuminate\Database\Eloquent\Model;

class Tinker1984Command extends Model
{
    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    public function tinker1984Session()
    {
        return $this->belongsTo(Tinker1984Session::class);
    }
}
