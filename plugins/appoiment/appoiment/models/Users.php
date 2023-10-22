<?php namespace Appoiment\Appoiment\Models;

use Model;

/**
 * Users Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Users extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'appoiment_appoiment_users';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
