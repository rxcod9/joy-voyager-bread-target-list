<?php

namespace Joy\VoyagerBreadTargetList\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'target-lists');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'target_lists',
                'display_name_singular' => __('joy-voyager-bread-target-list::seeders.data_types.target_list.singular'),
                'display_name_plural'   => __('joy-voyager-bread-target-list::seeders.data_types.target_list.plural'),
                'icon'                  => 'voyager-bread voyager-bread-target-list voyager-list',
                'model_name'            => 'Joy\\VoyagerBreadTargetList\\Models\\TargetList',
                // 'policy_name'           => 'Joy\\VoyagerBreadTargetList\\Policies\\TargetListPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadTargetList\\Http\\Controllers\\VoyagerBreadTargetListController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
