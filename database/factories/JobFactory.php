<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'queue' => 'parsing',
            'payload' => Visit::create(['system' => 'os', 'browser' => 'browser']),
            'attempts' => rand(1, 5),
            'available_at' => Carbon::now()->timestamp,
            'created_at'=> Carbon::now()->timestamp
        ];
    }
}
