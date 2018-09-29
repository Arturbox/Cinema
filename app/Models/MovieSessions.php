<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 28.09.2018
 * Time: 0:16
 */

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieSessions extends Model
{
    protected $table = 'movie_sessions';


    /**
     * Get movies id
     */
    public function movie()
    {
        return $this->hasOne('App\Models\Movies','id','movies_id');
    }

}