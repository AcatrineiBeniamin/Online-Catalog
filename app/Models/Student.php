<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function absences(): HasMany
    {
    return $this->hasMany(Absence::class);
    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
