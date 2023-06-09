<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['name', 'email', 'school_class_id'];

    /**
     * Summary of class
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
