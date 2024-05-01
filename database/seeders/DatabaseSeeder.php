<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Combination;
use App\Models\Occasion;
use App\Models\Outfit;
use App\Models\User;
use App\Models\Color;
use App\Models\Day;
use App\Models\TellerLog;
use App\Models\Aspect;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Outfit::factory(10)->create();

        Combination::factory(10)->create();

        // Occasion::factory(2)->create();

        Category::factory(2)->create();

        $events = [
            ['event_name' => 'Work', 'emoji' => '💼'],
            ['event_name' => 'Exercise', 'emoji' => '🏋️‍♂️'],
            ['event_name' => 'Dinner', 'emoji' => '🍽️'],
            ['event_name' => 'Party', 'emoji' => '🎉'],
            ['event_name' => 'Funeral', 'emoji' => '⚰️'],
            ['event_name' => 'Merit event', 'emoji' => '🙏'],
            ['event_name' => 'Date', 'emoji' => '❤️']
        ];

        foreach ($events as $event) {
            Occasion::create($event);
        }

        $colors = [
            ['name' => 'Purple', 'hex_code' => '#800080'],
            ['name' => 'Yellow', 'hex_code' => '#FFFF00'],
            ['name' => 'Orange', 'hex_code' => '#FFA500'],
            ['name' => 'Light Green', 'hex_code' => '#90EE90'],
            ['name' => 'Light Blue', 'hex_code' => '#ADD8E6'],
            ['name' => 'Pink', 'hex_code' => '#FFC0CB'],
            ['name' => 'Green', 'hex_code' => '#008000'],
            ['name' => 'Red', 'hex_code' => '#FF0000'],
            ['name' => 'Blue', 'hex_code' => '#0000FF'],
            ['name' => 'White', 'hex_code' => '#FFFFFF'],
            ['name' => 'Brown', 'hex_code' => '#A52A2A'],
            ['name' => 'Cream', 'hex_code' => '#FFFDD0'],
            ['name' => 'Gray', 'hex_code' => '#808080'],
            ['name' => 'Black', 'hex_code' => '#000000'],
            ['name' => 'Sky Blue', 'hex_code' => '#87CEEB']
        ];

        foreach ($colors as $color) {
            Color::create($color);
        }

        $days = [
            ['day' => 'Monday'],
            ['day' => 'Tuesday'],
            ['day' => 'Wednesday'],
            ['day' => 'Thursday'],
            ['day' => 'Friday'],
            ['day' => 'Saturday'],
            ['day' => 'Sunday']
        ];

        foreach ($days as $day) {
            Day::create($day);
        }

        $aspects = [
            ['aspect' => 'Money'],
            ['aspect' => 'Work'],
            ['aspect' => 'Love'],
            ['aspect' => 'Influence'],
            ['aspect' => 'Health'],
            ['aspect' => 'Bad']
        ];

        foreach ($aspects as $aspect) {
            Aspect::create($aspect);
        }



    }
}
