<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = ['topic', 'description'];

    /**
     * Summary of curriculums
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }
}
