<?php

use Illuminate\Database\Seeder;
use app\Thing;
class ThingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thing::create([
            'abled'                 =>  'abra cadabra',
            'title'                 =>  'blablabla',
            'slug'                  =>  'zueira',
            'created_by'            =>  '6',
            'created_at'            =>  '2019-03-03 23:46:05',
        ]);
    }
}
