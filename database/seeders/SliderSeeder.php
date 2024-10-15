<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image' => 'default-slide-1.webp',
                'text' => 'Draft',


            ],
            [
                'image' => 'default-slide-2.webp',
                'text' => 'Draft',

            ],
            [
                'image' => 'default-slide-3.webp',
                'text' => 'Draft',

            ],
        ];
        Slider::insert($data);
    }
}
