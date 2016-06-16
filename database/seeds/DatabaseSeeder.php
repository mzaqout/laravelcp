<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        
        DB::table('users')->insert([
            'name' => "administrator",
            'email' => 'himacq@gmail.com',
            'password' => bcrypt('a123456'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('groups')->insert([
            'name' => "SuperAdmin",
            'isActive' =>1,
            'userId' =>1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('groups')->insert([
            'name' => "Administrators",
            'isActive' =>1,
            'userId' =>1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('groups')->insert([
            'name' => "Support",
            'isActive' =>0,
            'userId' =>1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => bcrypt('secret'),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
	        ]);
        }
        
        
    }
}
