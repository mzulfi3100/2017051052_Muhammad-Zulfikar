<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa= [
            [
            'npm'    => '2017051052',
            'nama'  => 'Muhammad Zulfikar',
            'alamat' => 'Bandar Lampung',
            'created_at' => Time::now()
            ],
            [
            'npm'    => '2017051053',
            'nama'  => 'Test',
            'alamat' => 'Bandar Lampung',
            'created_at' => Time::now()
            ],
            [
            'npm'    => '2017051054',
            'nama'  => 'Test',
            'alamat' => 'Bandar Lampung',
            'created_at' => Time::now()
            ],
        ];

        foreach($data_mahasiswa as $data)
        {
            $this->db->table('mahasiswa')->insert($data);
        }        
    }
}
