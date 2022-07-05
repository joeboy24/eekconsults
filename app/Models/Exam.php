<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','staff_id','course_id','department_id','exam_title','exam_type','no_of_qs','duration',
        'duration_from','duration_to','que_per_page','randomize','display_ans'
    ];

    public function examsub(){
        return $this->hasMany('App\Models\ExamSub');
    }

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }

    // public function student(){
    //     return $this->belongsTo('App\Models\Student');
    // }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

}
