<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldData::query()
            ->create([	'id' => '556201', 	'form_field' => '556101', 	'attribute' => 'name', 													])
            ->create([	'id' => '556202', 	'form_field' => '556102', 	'attribute' => 'email', 													])
            ->create([	'id' => '556203', 	'form_field' => '556103', 	'attribute' => 'password', 													])
            ->create([	'id' => '556204', 	'form_field' => '556104', 	'attribute' => 'name', 													])
            ->create([	'id' => '556205', 	'form_field' => '556105', 	'attribute' => 'code', 													])
            ->create([	'id' => '556206', 	'form_field' => '556106', 	'attribute' => 'nationality', 													])
            ->create([	'id' => '556207', 	'form_field' => '556107', 	'attribute' => 'name', 													])
            ->create([	'id' => '556208', 	'form_field' => '556108', 	'attribute' => 'maid', 													])
            ->create([	'id' => '556209', 	'form_field' => '556109', 	'attribute' => 'date', 													])
            ->create([	'id' => '556210', 	'form_field' => '556110', 	'attribute' => 'hours', 													])
            ->create([	'id' => '556211', 	'form_field' => '556111', 	'attribute' => 'amount', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
