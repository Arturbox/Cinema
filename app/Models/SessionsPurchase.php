<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 27.09.2018
 * Time: 19:23
 */

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionsPurchase extends Model
{
    protected $table = 'sessions_purchase';

    protected $foreignKey = 'session_id';

}