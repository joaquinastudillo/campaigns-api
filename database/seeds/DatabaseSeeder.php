<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CampaignsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CampaignStoreTableSeeder::class);
        $this->call(CampaignProductTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
