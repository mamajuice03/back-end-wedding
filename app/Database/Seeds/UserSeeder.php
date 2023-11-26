<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Untuk 1 data
        // $data = [
        //     'name_user' => 'Subekti',
        //     'email_user' => 'subekti1234@gmail.com',
        //     'password_user' => password_hash('Bimo1234', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        // Multi data
        $data = [
            [
                'name_user' => 'Bimo',
                'email_user' => 'bimo1234@gmail.com',
                'password_user' => password_hash('subekti1234', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Winasis',
                'email_user' => 'winasis1234@gmail.com',
                'password_user' => password_hash('Winasis1234', PASSWORD_BCRYPT),
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
