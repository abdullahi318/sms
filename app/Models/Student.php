<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'department_id', 'gender', 'email', 'dob', 'gpa',];

    // protected $guarded = ['student_id'];

    /**
     * Get the user that owns the phone.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }
}
