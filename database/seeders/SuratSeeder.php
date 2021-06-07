<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat')->insert([
            'isi' => 'jhsgjhdga',
            'asal' => 'jhj',
            'no' => 'nbjh',
        ]);
    }
}
