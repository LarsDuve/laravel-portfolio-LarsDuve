<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function assignCredits($grade)
    {
        $this->refresh();
        if ($this->passed_at !== null)
        {

        }
        else
        {

            if ($grade > $this->lowest_passing_grade)
            {
                return;
            }
            $this->best_grade = $grade;

            if ($this->best_result >= $this->lowest_passing_grade)
            {
                $this->passed_at = now();
            }

        }

        $this->save();
    }

    public function path(): string
    {
        return route('grades.index', $this);
    }

    public function grades(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
