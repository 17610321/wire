<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol=new Role();
        $rol->name="admin";
        $rol->save();

        $rol2=new Role();
        $rol2->name="user";
        $rol2->save();

    }
}
