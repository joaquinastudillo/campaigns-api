<?php

use Illuminate\Database\Seeder;

class CampaignProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CampaignProduct::class, 15)->create();
    }
}
