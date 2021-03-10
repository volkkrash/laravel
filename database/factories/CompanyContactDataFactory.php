<?php

namespace Database\Factories;

use App\Models\CompanyContactData;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyContactDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyContactData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_address' => 'address',
            'company_phone' => '+38(095)123-123-12',
            'company_email' => 'example@mail.ex',
        ];
    }
}
