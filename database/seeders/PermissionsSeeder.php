<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert(
        //     [
        //     'name' => 'create',
        //     'guard_name' => 'web',
        //  ],
            [
            'name' => 'edit',
            'guard_name' => 'web',
         ],
            [
            'name' => 'delete',
            'guard_name' => 'web',
         ],
            [
            'name' => 'approve',
            'guard_name' => 'web',
         ],
            [
            'name' => 'attend',
            'guard_name' => 'web',
         ],
    
    );
    }
}
