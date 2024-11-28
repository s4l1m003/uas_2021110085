<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        model::unguard();
        $this->command->info("This is product seeder");
    }
}
