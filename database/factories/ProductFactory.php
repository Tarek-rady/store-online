<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;


    public function definition()
    {
        $name = $this->faker->unique()->words($nb = 3 , $asText = true);

        $slug = Str::slug($name);

        return [

                'name'=>$name,
            	'slug'=>$slug,
            	'short_description'=>$this->faker->text(100),
            	'description'=>$this->faker->text(300),
            	'price'=>$this->faker->numberBetween(100 , 500),
            	'SKU'=>$this->faker->numberBetween(10 , 100),
                'stock_status'=>'instock',
            	'quantity'=>$this->faker->numberBetween(100 , 800),
                'image'=>'digital_'.$this->faker->unique()->numberBetween(1 , 22).'.jpg',
                'images'=>$this->faker->text(100),
                'catigori_id'=>$this->faker->numberBetween(1 , 5),
        ];
    }
}
