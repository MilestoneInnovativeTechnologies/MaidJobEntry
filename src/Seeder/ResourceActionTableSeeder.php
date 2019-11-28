<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceAction::query()
            ->create([	'id' => '558301', 	'resource' => '555603', 	'name' => 'NewMaid', 	'description' => 'Add New Maid', 	'title' => 'Maid', 		'menu' => 'New', 									])
            ->create([	'id' => '558302', 	'resource' => '555603', 	'name' => 'ListMaid', 	'description' => 'List all maids', 	'title' => 'Maids', 		'menu' => 'List All', 									])
            ->create([	'id' => '558303', 	'resource' => '555604', 	'name' => 'NewJobEntry', 	'description' => 'Add new job details for a maid', 	'title' => 'Job Entry', 		'menu' => 'Add Job Details', 									])
            ->create([	'id' => '558304', 	'resource' => '555604', 	'name' => 'ListJobEntries', 	'description' => 'List all recent job entries', 	'title' => 'Job Entries', 		'menu' => 'Job Entries', 									])
            ->create([	'id' => '558305', 	'resource' => '555603', 	'name' => 'UpdateMaidDetails', 	'description' => 'Update maid details', 	'title' => 'Update', 											])
            ->create([	'id' => '558306', 	'resource' => '555604', 	'name' => 'UpdateJobEntry', 	'description' => 'Update job entry', 	'title' => 'Update', 											])
            ->create([	'id' => '558307', 	'resource' => '555604', 	'name' => 'ListTodayJobEntries', 	'description' => 'List todays job entries', 			'menu' => 'Today Jobs', 									])
            ->create([	'id' => '558308', 	'resource' => '555604', 	'name' => 'ListYesterdayJobEntries', 	'description' => 'List yesterdays job entries', 			'menu' => 'Yesterday Jobs', 									])
            ->create([	'id' => '558309', 	'resource' => '555604', 	'name' => 'ListWeekJobEntries', 	'description' => 'List current week job entries', 			'menu' => 'Current Week Jobs', 									])
            ->create([	'id' => '558310', 	'resource' => '555604', 	'name' => 'ListLastWeekJobEntries', 	'description' => 'List last week job entries', 			'menu' => 'Last Week Jobs', 									])
            ->create([	'id' => '558311', 	'resource' => '555604', 	'name' => 'ListMonthJobEntries', 	'description' => 'List current month job entries', 			'menu' => 'Current Month Jobs', 									])
            ->create([	'id' => '558312', 	'resource' => '555604', 	'name' => 'ListLastMonthJobEntries', 	'description' => 'List last month job entries', 			'menu' => 'Last Month Jobs', 									])
            ->create([	'id' => '558313', 	'resource' => '555601', 	'name' => 'AddManager', 	'description' => 'Add new manager', 			'menu' => 'Add Manager', 									])
            ->create([	'id' => '558314', 	'resource' => '555601', 	'name' => 'ListManagers', 	'description' => 'List all managers', 			'menu' => 'List All', 									])
            ->create([	'id' => '558315', 	'resource' => '555601', 	'name' => 'UpdateManager', 	'description' => 'Update manager details', 	'title' => 'Edit Details', 											])
            ->create([	'id' => '558316', 	'resource' => '555603', 	'name' => 'ViewMaidTodayJobs', 	'description' => 'List maids todays job entries', 	'title' => 'Today Jobs', 											])
            ->create([	'id' => '558317', 	'resource' => '555603', 	'name' => 'ViewMaidYesterdayJobs', 	'description' => 'List maids yesterdays job entries', 	'title' => 'Yesterday Jobs', 											])
            ->create([	'id' => '558318', 	'resource' => '555603', 	'name' => 'ViewMaidWeekJobs', 	'description' => 'List maids current week job entries', 	'title' => 'This Week Jobs', 											])
            ->create([	'id' => '558319', 	'resource' => '555603', 	'name' => 'ViewMaidLastWeekJobs', 	'description' => 'List maids last week job entries', 	'title' => 'Last Week Jobs', 											])
            ->create([	'id' => '558320', 	'resource' => '555603', 	'name' => 'ViewMaidMonthJobs', 	'description' => 'List maids current month job entries', 	'title' => 'This Month Jobs', 											])
            ->create([	'id' => '558321', 	'resource' => '555603', 	'name' => 'ViewMaidLastMonthJobs', 	'description' => 'List maids last month job entries', 	'title' => 'Last Month Jobs', 											])
            ->create([	'id' => '558322', 	'resource' => '555602', 	'name' => 'NewNationality', 	'description' => 'Add new nationality', 			'menu' => 'Add', 									])
            ->create([	'id' => '558323', 	'resource' => '555602', 	'name' => 'ListNationality', 	'description' => 'Lsi countries', 			'menu' => 'List All', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
