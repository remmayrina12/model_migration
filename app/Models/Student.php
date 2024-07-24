<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'birthdate',
    ];

    protected $appends = ['fullname'];
    public function getFullnameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
    
    public function grades() 
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');    
    }
}
