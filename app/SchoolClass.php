<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Summary of students
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Summary of curriculum
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function curriculum()
    {
        return $this->hasMany(Curriculum::class);
    }
}