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
use App\Models\Card;

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

        $Categorys = [
            ['category_name' => 'Top'],
            ['category_name' => 'Bottom'],
            ['category_name' => 'Shoe'],
        ];

        foreach ($Categorys as $Category) {
            Category::create($Category);
        }

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

        $cards = [
            ['card_number' => '0', 'card_name' => 'The Fool', 'meaning' => 'New beginnings, spontaneity, adventure, folly, mania, extravagance.', 'image_path' => 'images/tarot/0.jpg'],
            ['card_number' => 'I', 'card_name' => 'The Juggler (The Magician)', 'meaning' => 'Skill, resourcefulness, action, power to manifest one\'s intentions.', 'image_path' => 'images/tarot/I.jpg'],
            ['card_number' => 'II', 'card_name' => 'The Popess (The High Priestess)', 'meaning' => 'Intuition, mystery, understanding hidden truths.', 'image_path' => 'images/tarot/II.jpg'],
            ['card_number' => 'III', 'card_name' => 'The Empress', 'meaning' => 'Creativity, fertility, abundance, material success, comfort.', 'image_path' => 'images/tarot/III.jpg'],
            ['card_number' => 'IV', 'card_name' => 'The Emperor', 'meaning' => 'Authority, structure, control, law, discipline.', 'image_path' => 'images/tarot/IV.jpg'],
            ['card_number' => 'V', 'card_name' => 'The Pope (The Hierophant)', 'meaning' => 'Tradition, conformity, morality, religious or cultural institutions.', 'image_path' => 'images/tarot/V.jpg'],
            ['card_number' => 'VI', 'card_name' => 'The Lovers', 'meaning' => 'Relationships, choices, moral or ethical decisions.', 'image_path' => 'images/tarot/VI.jpg'],
            ['card_number' => 'VII', 'card_name' => 'The Chariot', 'meaning' => 'Victory, willpower, determination, triumph over obstacles.', 'image_path' => 'images/tarot/VII.jpg'],
            ['card_number' => 'VIII', 'card_name' => 'Justice', 'meaning' => 'Fairness, truth, law, need for balance and honesty.', 'image_path' => 'images/tarot/VIII.jpg'],
            ['card_number' => 'IX', 'card_name' => 'The Hermit', 'meaning' => 'Introspection, wisdom, guidance, personal reflection.', 'image_path' => 'images/tarot/IX.jpg'],
            ['card_number' => 'X', 'card_name' => 'The Wheel of Fortune', 'meaning' => 'Cycles, change, fate, turning points.', 'image_path' => 'images/tarot/X.jpg'],
            ['card_number' => 'XI', 'card_name' => 'Strength', 'meaning' => 'Courage, persistence, inner strength, control over instincts.', 'image_path' => 'images/tarot/XI.jpg'],
            ['card_number' => 'XII', 'card_name' => 'The Hanged Man', 'meaning' => 'Sacrifice, letting go, new perspectives, pause and reconsider.', 'image_path' => 'images/tarot/XII.jpg'],
            ['card_number' => 'XIII', 'card_name' => '(Death)', 'meaning' => 'Transformation, ending, transition, end of something significant.', 'image_path' => 'images/tarot/XIII.jpg'],
            ['card_number' => 'XIV', 'card_name' => 'Temperance', 'meaning' => 'Moderation, balance, purpose, patience, compromise.', 'image_path' => 'images/tarot/XIV.jpg'],
            ['card_number' => 'XV', 'card_name' => 'The Devil', 'meaning' => 'Bondage, addiction, materialism, trapped by base instincts.', 'image_path' => 'images/tarot/XV.jpg'],
            ['card_number' => 'XVI', 'card_name' => 'The House of God (The Tower)', 'meaning' => 'Sudden change, upheaval, chaos, destructive but leading to awareness.', 'image_path' => 'images/tarot/XVI.jpg'],
            ['card_number' => 'XVII', 'card_name' => 'The Star', 'meaning' => 'Hope, faith, inspiration, renewal, calm.', 'image_path' => 'images/tarot/XVII.jpg'],
            ['card_number' => 'XVIII', 'card_name' => 'The Moon', 'meaning' => 'Illusion, fear, confusion, hidden enemies, deception.', 'image_path' => 'images/tarot/XVIII.jpg'],
            ['card_number' => 'XIX', 'card_name' => 'The Sun', 'meaning' => 'Success, vitality, joy, clarity, optimism.', 'image_path' => 'images/tarot/XIX.jpg'],
            ['card_number' => 'XX', 'card_name' => 'Judgement', 'meaning' => 'Rebirth, call to action, inner calling, significant decision or change.', 'image_path' => 'images/tarot/XX.jpg'],
            ['card_number' => 'XXI', 'card_name' => 'The World', 'meaning' => 'Completion, achievement, fulfillment, successful conclusion, wholeness.', 'image_path' => 'images/tarot/XXI.jpg']
        ];
        
        
        foreach ($cards as $card) {
            Card::create($card);
        }


    }
}
