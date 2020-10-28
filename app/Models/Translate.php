<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Translate extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $table = 'hcn_translate';
    protected $primaryKey = 'id';
    protected $fillable = [
        'key_trans', 'japan', 'english', 'vietnam'
    ];
}