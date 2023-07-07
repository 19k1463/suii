<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Spatie\Permission\Models\Role;
class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   Role::create(['name' => 'patient']);
        $faker = Faker::create();
        $user = User::factory()->create();
        for($i=1; $i<=10; $i++)
        {
            DB::table('doctor')->insert([
                'user_id' => $user->id,
                'specialization' => $faker->jobTitle,
                'qualification' => $faker->randomElement(['MBBS', 'BDS', 'MS']),
                'yearofexpierence' => (int)$faker->numberBetween(1, 30),
            ]);
            $doctorRole = Role::where('name', 'doctor')->first();
            $user->assignRole($doctorRole);
            // now here through the spatie package i want to assignt the role//
        }
    } 
}

