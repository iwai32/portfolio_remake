<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Profile\Profile;
use App\Models\Profile\ProfileCareer;
use App\Models\Profile\ProfilePr;
use App\Models\Profile\ProfileSpecialSkill;
use App\Models\Profile\ProfileSpecialHobby;

class ProfileIndexTest extends TestCase
{
  use RefreshDatabase;
  private $profile;

  public function setUp(): void
    {
      parent::setUp();
      $this->profile = factory(Profile::class)->create()->each(function($profile) {
        factory(ProfileCareer::class)->create();
        factory(ProfilePr::class)->create();
        factory(ProfileSpecialSkill::class)->create();
        factory(ProfileSpecialHobby::class)->create();
      });
    }
    /**
     * @test
     */
    public function 一覧取得()
    {
        $response = $this->getJson(route('profile-index'));
        $response
        ->assertStatus(200)
        ->assertJson([
          'data' => [
            'id' => config('const.MY_PROFILE_ID')
          ]
        ]);
    }
}
