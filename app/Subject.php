<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class: Subject
 *
 * @category Category
 * @package  Package
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://link/
 *
 * @see Model
 */
class Subject extends Model
{
    /**
     * Fillable Variable
     *
     * @var array
     */
    protected $fillable = [ 'name', 'code', 'abbreviation', 'category_id' ];


    /**
     * App/Category Relationship
     *
     * @return Model
     */
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
}
