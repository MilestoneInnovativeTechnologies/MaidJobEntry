<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceScope::query()
            ->create([	'id' => '555801', 	'resource' => '555604', 	'name' => 'Today', 	'description' => 'Jobs which handled today', 	'method' => 'day', 											])
            ->create([	'id' => '555802', 	'resource' => '555604', 	'name' => 'Yesterday', 	'description' => 'Jobs which handled yesterday', 	'method' => 'lastDay', 											])
            ->create([	'id' => '555803', 	'resource' => '555604', 	'name' => 'ThisWeek', 	'description' => 'Jobs which handled this week', 	'method' => 'week', 											])
            ->create([	'id' => '555804', 	'resource' => '555604', 	'name' => 'LastWeek', 	'description' => 'Jobs which handled last week', 	'method' => 'lastWeek', 											])
            ->create([	'id' => '555805', 	'resource' => '555604', 	'name' => 'ThisMonth', 	'description' => 'Jobs which handled this month', 	'method' => 'month', 											])
            ->create([	'id' => '555806', 	'resource' => '555604', 	'name' => 'LastMonth', 	'description' => 'Jobs which handled this month', 	'method' => 'lastMonth', 											])
            ->create([	'id' => '555807', 	'resource' => '555604', 	'name' => 'Latest', 	'description' => 'Jobs in descending order of date', 	'method' => 'latest', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
