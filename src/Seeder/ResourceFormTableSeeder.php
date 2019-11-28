<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceForm::query()
            ->create([	'id' => '556001', 	'resource' => '555601', 	'name' => 'ManagerForm', 	'description' => 'Form to manage managers', 	'title' => 'Manager', 	'action_text' => 'Save', 										])
            ->create([	'id' => '556002', 	'resource' => '555602', 	'name' => 'NationalityForm', 	'description' => 'Form to add a nationality', 	'title' => 'Nationality', 	'action_text' => 'Save', 										])
            ->create([	'id' => '556003', 	'resource' => '555603', 	'name' => 'NewMaidForm', 	'description' => 'Form to create a new maid', 	'title' => 'Maid', 	'action_text' => 'Save', 										])
            ->create([	'id' => '556004', 	'resource' => '555604', 	'name' => 'NewMaidJob', 	'description' => 'Form to enter new maids job details of a day', 	'title' => 'Maid Job', 	'action_text' => 'Save', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
