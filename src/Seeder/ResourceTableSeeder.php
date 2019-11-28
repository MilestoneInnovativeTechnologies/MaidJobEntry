<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Resource::query()
            ->create([	'id' => '555601', 	'name' => 'Manager', 	'description' => 'Manager', 	'title' => 'Managers', 	'namespace' => 'Milestone\MaidJobEntry', 	'table' => 'users', 										])
            ->create([	'id' => '555602', 	'name' => 'Nationality', 	'description' => 'Maid Nationality', 	'title' => 'Nationality', 	'namespace' => 'Milestone\MaidJobEntry', 	'table' => 'nationality', 										])
            ->create([	'id' => '555603', 	'name' => 'Maid', 	'description' => 'Maids', 	'title' => 'Maids', 	'namespace' => 'Milestone\MaidJobEntry', 	'table' => 'maids', 										])
            ->create([	'id' => '555604', 	'name' => 'MaidJob', 	'description' => 'Maid Jobs', 	'title' => 'Jobs', 	'namespace' => 'Milestone\MaidJobEntry', 	'table' => 'maid_jobs', 	'controller' => 'MaidJobController', 	'controller_namespace' => 'Milestone\MaidJobEntry\Controllers', 								])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
