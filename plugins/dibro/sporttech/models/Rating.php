<?php namespace Dibro\SportTech\Models;

use Model;

/**
 * Model
 */
class Rating extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dibro_sporttech_rating';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
