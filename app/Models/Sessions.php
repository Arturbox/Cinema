<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 27.09.2018
 * Time: 18:11
 */


namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{

    protected $table = 'sessions';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['date'];

    protected $dates = ['created_at','updated_at'];



    /**
     * Get the buy purchases for the session.
     */
    public function purchase()
    {
        return $this->hasMany('App\Models\SessionsPurchase');
    }




    /**
     * Get the buy purchases for the session.
     */
    public function movieSessions()
    {
        return $this->hasMany('App\Models\MovieSessions','sessions_id');
    }

}