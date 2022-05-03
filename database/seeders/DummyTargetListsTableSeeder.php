<?php

namespace Joy\VoyagerBreadTargetList\Database\Seeders;

use Joy\VoyagerBreadTargetList\Models\TargetList;
use Illuminate\Database\Seeder;

class DummyTargetListsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        TargetList::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'TargetList ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'TargetList Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
