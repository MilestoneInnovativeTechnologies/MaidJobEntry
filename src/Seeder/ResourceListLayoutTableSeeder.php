<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceListLayoutTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListLayout::query()
            ->create([	'id' => '557601', 	'resource_list' => '557301', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '557602', 	'resource_list' => '557301', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '557603', 	'resource_list' => '557301', 	'label' => 'Email', 	'field' => 'email', 												])
            ->create([	'id' => '557604', 	'resource_list' => '557302', 	'label' => 'ID', 	'field' => 'id', 												])
            ->create([	'id' => '557605', 	'resource_list' => '557302', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '557606', 	'resource_list' => '557303', 	'label' => 'Code', 	'field' => 'code', 												])
            ->create([	'id' => '557607', 	'resource_list' => '557303', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '557608', 	'resource_list' => '557303', 	'label' => 'Nationality', 	'field' => 'name', 	'relation' => '555902', 											])
            ->create([	'id' => '557609', 	'resource_list' => '557304', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557610', 	'resource_list' => '557304', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557611', 	'resource_list' => '557304', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557612', 	'resource_list' => '557304', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557613', 	'resource_list' => '557304', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557614', 	'resource_list' => '557305', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557615', 	'resource_list' => '557305', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557616', 	'resource_list' => '557305', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557617', 	'resource_list' => '557305', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557618', 	'resource_list' => '557305', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557619', 	'resource_list' => '557306', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557620', 	'resource_list' => '557306', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557621', 	'resource_list' => '557306', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557622', 	'resource_list' => '557306', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557623', 	'resource_list' => '557306', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557624', 	'resource_list' => '557307', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557625', 	'resource_list' => '557307', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557626', 	'resource_list' => '557307', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557627', 	'resource_list' => '557307', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557628', 	'resource_list' => '557307', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557629', 	'resource_list' => '557308', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557630', 	'resource_list' => '557308', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557631', 	'resource_list' => '557308', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557632', 	'resource_list' => '557308', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557633', 	'resource_list' => '557308', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557634', 	'resource_list' => '557309', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557635', 	'resource_list' => '557309', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557636', 	'resource_list' => '557309', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557637', 	'resource_list' => '557309', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557638', 	'resource_list' => '557309', 	'label' => 'Amount', 	'field' => 'amount', 												])
            ->create([	'id' => '557639', 	'resource_list' => '557310', 	'label' => 'Job ID', 	'field' => 'id', 												])
            ->create([	'id' => '557640', 	'resource_list' => '557310', 	'label' => 'Maid', 	'field' => 'display', 	'relation' => '555903', 											])
            ->create([	'id' => '557641', 	'resource_list' => '557310', 	'label' => 'Date', 	'field' => 'human_date', 												])
            ->create([	'id' => '557642', 	'resource_list' => '557310', 	'label' => 'Hours', 	'field' => 'hours', 												])
            ->create([	'id' => '557643', 	'resource_list' => '557310', 	'label' => 'Amount', 	'field' => 'amount', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
