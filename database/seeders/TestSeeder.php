<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutionId = Str::uuid()->toString();
        $name='tkm';
        DB::table('Institution')->insert([
            'Institution_id' => $institutionId,
            'Name_of_institution' => $name,
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
$machineId = Str::uuid()->toString();
        DB::table('machines')->insert([
           'Institution_id' => $institutionId, 
           'Machine_ID' => $machineId,
           'Machine_name' => 'Printer',
           'Category' => 'Idea Lab',
           'Model' => 'esfdz',
           'Location' => 'grs',
           'Date_of_manufacture' => '2023-07-15',
            'rate' => '43535',
            'count' => '4',
            'Available' => 'true',
            'Description' => 'bla',
            'Specification' => json_encode([]),
            'image' =>json_encode([]),
            
        ]);
        $machineId = Str::uuid()->toString();
        DB::table('machines')->insert([
           'Institution_id' => $institutionId,    
           'Machine_ID' => $machineId,
           'Machine_name' => 'auto-cad',
           'Category' => 'Mechanical Lab',
           'Model' => 'esfz',
           'Location' => 'grys',
           'Date_of_manufacture' => '2023-07-15',
            'rate' => '43535',
            'count' => '4',
            'Available' => 'true',
            'Description' => 'bla',
            'Specification' => json_encode([]),
            'image' =>json_encode([]),
            
        ]);


    }
}
