<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	$status = [
	    'hostname' => "linux008123456",
	    'ip'       => "10.172.1.130",
	    'username' => "a12289004",
	    'login_at' => "2024-10-27 15:30:00"
	];
	\App\Models\Status::create($status);
	\App\Models\Status::factory(15)->create();




    }
}
