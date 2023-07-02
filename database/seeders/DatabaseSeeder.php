<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Product::factory()->count(50)->create();
        Review::factory()->count(300)->create();
    }
}
