<?php

namespace Database\Factories;

use App\Models\SocialService;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialService::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'facebook',
            'link' => 'facebook.com',
        ];
    }
}
