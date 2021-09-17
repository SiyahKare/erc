<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'product_id', 'code', 'name', 'vat_rate', 'unit', 'list_price', 'list_price_in_trl', 'currency', 'buying_price', 'buying_price_in_trl', 'buying_currency', 'stock_count', 'initial_stock_count', 'critical_stock_count'];
    // protected $hidden = [];
    // protected $dates = [];
    // public $translatable = ['name', 'description', 'details', 'features', 'extras'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
