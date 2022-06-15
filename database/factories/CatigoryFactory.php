<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Catigory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatigoryFactory extends Factory
{

    protected $model = Catigory::class;


    public function definition()
    {

        $name = $this->faker->unique()->words($nb = 3 , $asText = true);

        $slug = Str::slug($name);


        return [
            'name' => $name ,
            'slug' => $slug ,
        ];
    }
}
