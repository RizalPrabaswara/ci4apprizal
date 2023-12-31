<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Rizal Prabaswara',
        //         'alamat'        => 'Jl. Tugiman No. 22',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     [
        //         'nama'          => 'Dwie Tjahjono',
        //         'alamat'        => 'Jl. Tugiman No. 22',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     [
        //         'nama'          => 'Sari Apta',
        //         'alamat'        => 'Jl. Tugiman No. 22',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ]
        // ];

        $faker = $faker = \Faker\Factory::create('id_ID');
        for($i=0; $i < 100; $i++){

        
        $data = [
            'nama'          => $faker->name(),
            'alamat'        => $faker->address(),
            'created_at'    => Time::createFromTimestamp($faker->unixTime()),
            'updated_at'    => Time::now()
        ];
        $this->db->table('orang')->insert($data);

    }

        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder (untuk satu data)
        // $this->db->table('orang')->insert($data);

        // Using Query Builder (untuk banyak data)
        // $this->db->table('orang')->insertBatch($data);
    }
}
