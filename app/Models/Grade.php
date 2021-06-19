<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model


{
    protected $grade;
    protected $fillable = ['quartile', 'course_name', 'test_name', 'ec'];

    use HasFactory;
    public function newResult($grade)
    {
        $this->refresh();
        if ($this->best_grade > $grade)
        {
            return;
        }

        $this->best_grade = $grade;
    }

    public function path()
    {
        return route('grades.index', $this);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
