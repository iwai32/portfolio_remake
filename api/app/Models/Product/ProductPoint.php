<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPoint extends Model
{
  use SoftDeletes;
  protected $table = 'product_points';
}
