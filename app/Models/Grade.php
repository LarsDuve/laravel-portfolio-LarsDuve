<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model


{
    protected $grade;
    protected $fillable = ['quartile', 'course_name', 'test_name', 'ec', 'best_grade'];

    use HasFactory;
    public function newResult($grade)
    {
        $this->refresh();
        if ($this->best_grade > $grade)
        {
            return;
        }

        $this->best_grade = $grade;

        if ($this->best_result >= $this->lowest_passing_grade)
        {
            $this->passed_at = now();
        }

        $this->save();
    }

}
