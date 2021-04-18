<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\profileResource;
use App\Exceptions\APIException;
use Illuminate\Support\Facades\DB;
use App\Services\ProfileService;

class ProfileController extends Controller
{
  public $profileService;

  public function __construct(
    ProfileService $profileService
  ) {
    $this->profileService = $profileService;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return profileResource::make(
      $this->profileService->getMyProfile()
    );
  }

  /**
   * overWriteYourProfile the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return object
   */
   public function overWriteYourProfile(Request $request): object
   {
     return DB::transaction(function () use ($request) {
       try {
         $this->profileService->overWriteYourProfile($request->all());
 
         return response()->json([
           'success' => true,
           'message' => '更新しました。',
           'status' => 200
         ]);
       } catch (\Throwable $e) {
         throw new APIException;
       }
     });
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
  public function edit($id)
  {
    //
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
