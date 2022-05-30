<?php

namespace Database\Seeders;

use App\Models\ItemGroup;
use Illuminate\Database\Seeder;

class ItemGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemGroup::factory(7)->create();
    }
}
