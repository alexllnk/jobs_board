<?php

namespace Tests\Unit;

use App\Models\Company;
use App\Models\Offer;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfferTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Test.
     */
    public function test_belongs_to_a_user(): void
    {
        //AAA

        //Arrange
        $user = User::factory()->create();
        auth()->login($user);
        $company = Company::factory()->create(['user_id' => $user]);
        $offer = Offer::factory()->create(['company_id' => $company]);
        //Act
        $offers = $user->company->offers;
        //Assert
        $this->assertTrue($offers->first()->is($offer));
    }
}
