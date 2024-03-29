<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['administrator', 'siswa', 'kepsek'];

        foreach ($roles as $role) {
            App\Role::create([
                'name' => $role
            ]);
        }
    }
}
