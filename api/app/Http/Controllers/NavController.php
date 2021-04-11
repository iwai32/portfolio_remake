<?php

namespace App\Http\Controllers;

use App\Http\Resources\navCategoryForAdminResource;
use App\Http\Resources\navCategoryResource;
use Illuminate\Http\Request;
use App\Models\NavCategory;

class NavController extends Controller
{
  private $navCategory;

  public function __construct(NavCategory $navCategory)
  {
    $this->navCategory = $navCategory;
  }

  public function index()
  {
    return navCategoryResource::make($this->navCategory->where('is_admin', 0)->get());
  }

  public function getDataForAdmin()
  {
    return navCategoryForAdminResource::make($this->navCategory->where('is_admin', 1)->get());
  }
}
