<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
            'username' => 'Fadil',
			'useremail' => 'fadil123@gmail.com',
			'userpassword' => password_hash('fadil123', PASSWORD_DEFAULT),
        ]);
    }
}
