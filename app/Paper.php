<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [ 'name', 'year', 'description', 'subject_id' ];

    //
    /**
     * Subject Relationship
     *
     * @return Subject $model Model Object
     */
    public function subject()
    {
        return  $this->belongsTo('\App\Subject');
    }

}
