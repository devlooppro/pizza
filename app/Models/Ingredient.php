<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 * @package App\Models
 *
 * @property-read int id
 * @property string name
 * @property double price
 * @property-read Carbon created_at
 * @property-read Carbon updated_at
 */
class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price'
    ];
}
