<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Statuspost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Draft',

            ],
            [
                'name' => 'Publish',
            ],
            [
                'name' => 'Archived',
            ],
        ];
        Statuspost::insert($data);
    }
}
