<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();

        Listing::factory(6)->create();

        // Listing::create(
        //     [
        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'Acme Inc.',
        //         'location' => 'Boston',
        //         'email' => 'email1@acme.com',
        //         'website' => 'http://acme.com',
        //         'description' => 'Professional Laravel developer with 5 years of experience. Must be able to work in a fast-paced environment.'
        //     ]
        // );

        // Listing::create(
        //     [
        //         'title' => 'Full Stack Developer',
        //         'tags' => 'nodejs, react',
        //         'company' => 'Innovatech Solutions',
        //         'location' => 'San Francisco',
        //         'email' => 'dev2@innovatech.com',
        //         'website' => 'http://innovatech.com',
        //         'description' => 'Seeking a full stack developer familiar with Node.js and React for building web applications.'
        //     ]
        // );
    }
}
