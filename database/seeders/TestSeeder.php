<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Institution')->insert([
            'Institution_id' => '6a6c2807-9f35-4b7e-baef-2f7e1e56a3b8', 
            'Name_of_institution' => 'tkm',
            'Pincode' => '78695',
            'Street_Address'=>'kkode',
            'District'=>'kollam',
            'State'=>'kerala',
            'Email'=>'bla@gmail.com',
            'Category_of_Institution' => 'engg',
            'Type_of_Institution' => 'gov aided',
            'Affiliation' => 'ktu',
            'Institution_logo' => '',
            'Instagram_handle' => 'te',
            'Facebok_handle' => 're',
            'Youtube_channel' => 'blue',
            'Year_of_establishment_of_college' => '1947',
            'Contact_number' => '45738690'
]);

    }
}
