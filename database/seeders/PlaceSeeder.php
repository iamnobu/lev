<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Http\Controllers\PlaceController;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name'=>'東京タワー',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            'access'=>'by car',
            'price'=>'100',
            'opening_hour'=>'00:00-24:00',
            'discription'=>'東京の代表的なスポット',
            ]);
    }
}
