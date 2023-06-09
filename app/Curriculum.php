<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    /**
     * Summary of table
     * @var string
     */
    protected $table = 'curriculums';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['school_class_id', 'lecture_id', 'order'];

    /**
     * Summary of school_class
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_class()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    /**
     * Summary of lecture
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
}
