<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;
  protected $table = 'products';

  /**
   * relations
   */
  public function productDetail()
  {
    return $this->hasMany(ProductDetail::class, 'product_id');
  }

  public function productPoint()
  {
    return $this->hasMany(ProductPoint::class, 'product_id');
  }
}
