<?php

namespace Abstractrs\Tinker1984\Models;

use Illuminate\Database\Eloquent\Model;

class Tinker1984Session extends Model
{
    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    public function tinker1984Commands()
    {
        return $this->hasMany(Tinker1984Command::class);
    }

    public function commands()
    {
        return $this->tinker1984Commands();
    }

    public function tinker1984Usr()
    {
        return $this->belongsTo(Tinker1984User::class);
    }
}
