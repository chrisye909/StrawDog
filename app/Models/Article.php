<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Article
 * @package App\Models
 * @version October 24, 2016, 1:31 pm UTC
 */
class Article extends Model
{

    public $table = 'articles';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'keywords',
        'summary',
        'text',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'keywords' => 'string',
        'summary' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string:255',
        'text' => 'required',
        'keywords' => 'string:255',
        'summary' => 'string:255',
    ];
}
