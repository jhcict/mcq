<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }
    /**
     * undocumented function
     *
     * @return void
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


    //
}
