<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::truncate();
            DB::table('role_user')->truncate();


        $superadminRole = Role::where('urole','superadmin')->first();
            $adminRole  = Role::where('urole','admin')->first();
            $authorRole = Role::where('urole','author')->first();
            $userRole   = Role::where('urole','user')->first();

            $superadmin = User::create([
                'name'     => 'Shams',
                'status'   => '1',
                'gender'   => 'Male',
                'phone'    => '0173574515',
                'urole'    => 'superadmin',
                'email'    => 'superadmin@admin.com',
                'password' => Hash::make('superadmin@admin.com'),
            ]);


            $admin = User::create([
                'name'          => 'Khan',
                'status'        => '1',
                'gender'        => 'Male',
                'phone'         => '0173574515',
                'urole'         => 'admin',
                'email'         => 'admin@admin.com',
                'password'      => Hash::make('admin@admin.com'),
            ]);

            $author = User::create([
                'name'     => 'Arabi',
                'status'   => '1',
                'gender'   => 'Male',
                'phone'    => '0173574515',
                'urole'    => 'author',
                'email'    => 'author@admin.com',
                'password' => Hash::make('author@admin.com'),
            ]);

            $user = User::create([
                'name'     => 'Mollah',
                'status'   => '1',
                'gender'   => 'Male',
                'phone'    => '0173574515',
                'email'    => 'user@admin.com',
                'password' => Hash::make('user@admin.com'),
            ]);

            $superadmin->roles()->attach($superadminRole);
            $admin     ->roles()->attach($superadminRole);
            $author    ->roles()->attach($superadminRole);
            $user      ->roles()->attach($superadminRole);

    }
} 
