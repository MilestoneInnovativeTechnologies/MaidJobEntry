<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\ResourceData::query()
            ->create([	'id' => '557801', 	'resource' => '555603', 	'name' => 'MaidDetails', 	'description' => 'Details of maid', 	'title_field' => 'name', 											])
            ->create([	'id' => '557802', 	'resource' => '555604', 	'name' => 'JobEntryDetails', 	'description' => 'Details of maid job entry', 	'title_field' => 'maid.name', 											])
            ->create([	'id' => '557803', 	'resource' => '555601', 	'name' => 'ManagerDetails', 	'description' => 'Details of a manager', 	'title_field' => 'name', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
