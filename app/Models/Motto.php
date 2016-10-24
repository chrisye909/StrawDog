<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Motto
 * @package App\Models
 * @version October 24, 2016, 2:13 pm UTC
 */
class Motto extends Model
{
    use SoftDeletes;

    public $table = 'mottoes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'content',
        'source'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string',
        'source' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

    
}
