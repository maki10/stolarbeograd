<?php

use App\Wall;
use Illuminate\Database\Seeder;

class WallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wall::create([
        	'title' => 'Zid 1',
        	'source' => 'images/walls/Zid_1.jpg',
        ]);
    }
}
