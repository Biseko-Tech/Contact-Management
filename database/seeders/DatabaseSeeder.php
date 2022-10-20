<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Contact;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     CompaniesTableSeeder::class,
        //     ContactsTableSeeder::class,
        // ]);

        // User::factory(10)->create();
        // Company::factory(10)->create();
        // Contact::factory(10)->create();

        $users = User::factory(5)->create();

        $users->each(function ($user) {
            $companies = $user->company()->saveMany(
                Company::factory(rand(3, 6))->make()
            );

            $companies->each(function ($company) use ($user) {
                $company->contacts()->saveMany(
                    Contact::factory(rand(5, 10))
                        ->make()
                        ->map(function ($contact) use ($user) {
                            $contact->user_id = $user->id;
                            return $contact;
                        })
                );
            });
        });
    }
}
