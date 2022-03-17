<?php

namespace Joy\VoyagerBreadTargetList\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use Database\Seeders\PermissionsTableSeeder as VoyagerPermissionsTableSeeder;

class PermissionsTableSeeder extends VoyagerPermissionsTableSeeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Permission::generateFor('target_lists');
    }
}
