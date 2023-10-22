<?php namespace Appoiment\Appoiment\Models;

use Model;

class Appointment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'appoiment_appoiments';

    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'appointment_date' => 'required|date',
        'desired_service' => 'required',
    ];
}
