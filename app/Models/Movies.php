<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 27.09.2018
 * Time: 18:10
 */


namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

    public $timestamps = true;

    protected $table = 'movies';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    protected $dates = ['created_at','updated_at'];

    protected $casts = [];





}
