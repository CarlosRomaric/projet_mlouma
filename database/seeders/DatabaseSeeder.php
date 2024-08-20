<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Database\Seeders\Assign\AssignPermissionsToPlateformAdministratorSeeder;
use Database\Seeders\Assign\AssignPermissionsToTraceAgriAdministratorSeeder;
use Database\Seeders\Assign\AssignPermissionsToAgribusinessAdministratorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RegionDepartementTableSeeder::class);
        $this->call(AgribusinessTableSeeder::class);
        $this->call(FarmerTableSeeder::class);
        //$this->call(FarmerKorhogoTableSeeder::class);
        $this->call(PlotTableSeeder::class);
        $this->call(TypeEntretienTableSeeder::class);
        $this->call(TypeProduitTableSeeder::class);
        $this->call(TypeActiviteTableSeeder::class);
        $this->call(SpeculationTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AssignPermissionsToPlateformAdministratorSeeder::class);
        $this->call(AssignPermissionsToTraceAgriAdministratorSeeder::class);
        $this->call(AssignPermissionsToAgribusinessAdministratorSeeder::class);
    }
}
