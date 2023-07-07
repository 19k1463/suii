<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*
        $faker = Faker::create();
        DB::table('doctor')->insert([
                'user_id' => function() {return User::factory()->create()->id; },
                'specialization' => $faker->jobTitle.Str::random(10),
                'qualification' => $faker->randomElement(['MBBS','BDS','MS']),
                'yearofexpierence' => $faker->numberBetween(1,30),
        ]); 
    }
}

'name' => ,
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            */
            $this->call([DoctorSeeder::class]);

    }
        }