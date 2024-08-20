<?php
namespace Database\Seeders;

use App\Models\Agribusiness;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: salioudiabate
 * Date: 01/04/2020
 * Time: 11:16
 */

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $this->createAdminUser();
    }

    private function createAdminUser()
    {
        $agribusiness = Agribusiness::where('acronym','IDP')->first();
        $user = User::create([
            'fullname' => 'Admin TRACEAGRI',
            'phone' => '+225 00000000',
            'username' => 'admin.traceagri',
            'password' => bcrypt('traceagri!!!')
        ]);

        $user->roles()->sync(Role::where('name', 'ADMINISTRATEUR TRACEAGRI')->first()->id);

        $user = User::create([
            'fullname' => 'Admin PLATEFORME',
            'phone' => '+225 01010101',
            'username' => 'admin.plateforme',
            'password' => bcrypt('traceagri!!!')
        ]);

        $user->roles()->sync(Role::where('name', 'ADMINISTRATEUR PLATEFORME')->first()->id);

        $user = User::create([
            'fullname' => 'Agent COLLECT',
            'phone' => '+225 0778546246',
            'username' => 'agent.collect',
            'email'=>'carlos.nguetta@gmail.com',
            'password' => bcrypt('traceagri!!!'),
            'agribusiness_id'=>$agribusiness->id
        ]);

        $user->roles()->sync(Role::where('name', 'MOBILE')->first()->id);

        $user = User::create([
            'fullname' => 'Mohamed',
            'phone' => '0748977081',
            'username' => 'momo123',
            'email'=>'lamine99ouattara2@gmail.com',
            'password' => bcrypt('123traceagri'),
            'agribusiness_id'=>$agribusiness->id
        ]);

        $user->roles()->sync(Role::where('name', 'MOBILE')->first()->id);
    }
}
