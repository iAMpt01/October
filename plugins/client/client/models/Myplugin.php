<?php namespace Client\Client\Models;

use Model;

/**
 * Myplugin Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Myplugin extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'client_client_myplugins';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
