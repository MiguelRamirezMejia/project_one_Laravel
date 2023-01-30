<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $description
 * @property $value_buy
 * @property $value_sale
 * @property $stock
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property Movement[] $movements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'code' => 'required',
		'description' => 'required',
		'value_buy' => 'required',
		'value_sale' => 'required',
		'stock' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = ['name','code','description','value_buy','value_sale','stock','category_id'];


   
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    


    public function movements(){
     return $this->hasMany('App\Models\Movement','product_id');
      }

      public function categories(){
       return $this->belongsTo('App\Models\Category','category_id');
        }
    

}
