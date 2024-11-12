<?php namespace Dibro\SportTech\Models;

use Model;
use System\Models\File; 

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dibro_sporttech_locations';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
        
    public $attachMany = [
        'photos' => File::class
    ];

}
