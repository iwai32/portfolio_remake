<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill\SkillCategory;
use App\Http\Resources\skillResource;
use App\Http\Resources\editSkillResource;

class SkillController extends Controller
{
  private $skill;

  public function __construct(SkillCategory $skillCategory)
  {
    $this->skill = $skillCategory;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return skillResource::make(
      $this->skill->where('profile_id', config('const.MY_PROFILE_ID'))
        ->with('skillCategoryDetail', 'skillCategoryComment')
        ->get()
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit()
  {
    return editSkillResource::collection(
      $this->skill->where('profile_id', config('const.MY_PROFILE_ID'))
        ->with('skillCategoryDetail', 'skillCategoryComment')
        ->get()
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Illuminate\Http\Request  $request
   * @return json
   */
  public function update(Request $request)
  {
    dd($request->all());
    return response()->json([
      'dfa' => 'fdaf'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
