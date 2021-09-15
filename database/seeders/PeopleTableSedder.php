<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeopleTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'age' => 30,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jiny',
            'age' => 32,
        ];
        DB::table('people')->insert($param);
    }
}
