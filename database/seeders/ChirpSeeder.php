<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChirpSeeder extends Seeder
{
    /**
     * Run the migrations.
     */
    public function run(): void
    {
        // Find the user IDs for Glenn, Emily, and Owen based on their email addresses
        $glennId = DB::table('users')->where('email', 'glenn.treafuker@gmail.com')->value('id');
        $emilyId = DB::table('users')->where('email', 'emily.wokerson@gmail.com')->value('id');
        $owenId = DB::table('users')->where('email', 'owen.line@gmail.com')->value('id');

        // Insert chirps for each user
        DB::table('chirps')->insert([
            [
                'user_id' => $glennId,
                'message' => "I donate my pubic hair to sheep who have been victims of the wool industry",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $emilyId,
                'message' => "You got food poisoning in Asia? Are you sure it was that and not just digestive tract racism?",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $owenId,
                'message' => "I should apply for jobs? Got any more Matrix NPC ideas?",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
};
