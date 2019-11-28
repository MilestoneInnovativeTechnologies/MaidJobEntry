<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceList::query()
            ->create([	'id' => '557301', 	'resource' => '555601', 	'name' => 'ManagersList', 	'description' => 'List all managers', 	'title' => 'Managers', 	'identity' => 'name', 	'items_per_page' => '20', 									])
            ->create([	'id' => '557302', 	'resource' => '555602', 	'name' => 'NationalityList', 	'description' => 'List all nations', 	'title' => 'Countries', 	'identity' => 'name', 	'items_per_page' => '20', 									])
            ->create([	'id' => '557303', 	'resource' => '555603', 	'name' => 'MaidsList', 	'description' => 'List all maids', 	'title' => 'Maids', 	'identity' => 'name', 	'items_per_page' => '20', 									])
            ->create([	'id' => '557304', 	'resource' => '555604', 	'name' => 'RecentJobList', 	'description' => 'List all recent jobs', 	'title' => 'Job Entries', 	'identity' => 'maid.name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '557305', 	'resource' => '555604', 	'name' => 'TodayJobList', 	'description' => 'List all job entries having date of today', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
            ->create([	'id' => '557306', 	'resource' => '555604', 	'name' => 'YesterdayJobList', 	'description' => 'List all job entries having date of yesterday', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
            ->create([	'id' => '557307', 	'resource' => '555604', 	'name' => 'CurrentWeekJobList', 	'description' => 'List all job entries having date of current week', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
            ->create([	'id' => '557308', 	'resource' => '555604', 	'name' => 'LastWeekJobList', 	'description' => 'List all job entries having date of last week', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
            ->create([	'id' => '557309', 	'resource' => '555604', 	'name' => 'CurrentMonthJobList', 	'description' => 'List all job entries having date of current month', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
            ->create([	'id' => '557310', 	'resource' => '555604', 	'name' => 'LastMonthJobList', 	'description' => 'List all job entries having date of last month', 	'title' => 'Job Entries', 	'identity' => 'human_date', 	'items_per_page' => '50', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
