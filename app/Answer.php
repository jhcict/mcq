<?php
/**
     * Model Object
     *
     * PHP Version 7.0
     *
     * @category Model
     * @package  LearnMCQ
     * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
     * @license  MIT http://opensource.org/licenses/MIT/
     * @link     http://mcq.learntechnologies.org/
     */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class: Answer
 *
 * @category Model
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 *
 * @see Model
 */
class Answer extends Model
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
