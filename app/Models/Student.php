<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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

    protected $appends = ['fullname','birthday'];
    public function getFullnameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
    public function getBirthdayAttribute()
    {
        $birthdate = $this->attributes['birthdate'];
        if($birthdate){
            return Carbon::parse($birthdate)->format('F d, Y');
        }
        return '';
    }
    
    public function grades() 
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');    
    }
}
