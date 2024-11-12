<?php namespace Dibro\SportTech\Models;

use Model;
use System\Models\File; 

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dibro_sporttech_news';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $attachMany = [
            'photos' => File::class
        ];
}
