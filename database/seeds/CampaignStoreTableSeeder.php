<?php

use Illuminate\Database\Seeder;

class CampaignStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CampaignStore::class, 15)->create();
    }
}
