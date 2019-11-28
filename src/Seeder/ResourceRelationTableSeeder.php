<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRelation::query()
            ->create([	'id' => '555901', 	'resource' => '555603', 	'name' => 'MaidJobs', 	'description' => 'Jobs done by a maid', 	'method' => 'Jobs', 	'type' => 'hasMany', 	'relate_resource' => '555604', 									])
            ->create([	'id' => '555902', 	'resource' => '555603', 	'name' => 'MaidNationality', 	'description' => 'Maids nationality details', 	'method' => 'Nationality', 	'type' => 'belongsTo', 	'relate_resource' => '555602', 									])
            ->create([	'id' => '555903', 	'resource' => '555604', 	'name' => 'Maid', 	'description' => 'Maid details', 	'method' => 'Maid', 	'type' => 'belongsTo', 	'relate_resource' => '555603', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
