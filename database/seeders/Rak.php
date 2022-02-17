<?php

namespace Database\Seeders;

use App\Models\Rak as ModelsRak;
use Illuminate\Database\Seeder;

class Rak extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRak::create([
            'name' => 'Rak A',
            'lokasi' => 'Disana'
        ]);
        ModelsRak::create([
            'name' => 'Rak A1',
            'lokasi' => 'Disana'
        ]);
        ModelsRak::create([
            'name' => 'Rak B',
            'lokasi' => 'Disana'
        ]);
        ModelsRak::create([
            'name' => 'Rak C',
            'lokasi' => 'Disana'
        ]);
        ModelsRak::create([
            'name' => 'Rak D',
            'lokasi' => 'Disana'
        ]);
        ModelsRak::create([
            'name' => 'Rak F',
            'lokasi' => 'Disana'
        ]);
    }
}
