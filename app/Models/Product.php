<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $details
 * @property $price
 * @property $stock
 * @property $category_id
 * @property $image_path
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'price' => 'required',
		'stock' => 'required',
		'category_id' => 'required',
		'image_path' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','details','description','price','stock','category_id','image_path'];

    public function categoria(){

      return $this->hasOne('App\Models\Categoria', 'id', 'category_id');

    }

}