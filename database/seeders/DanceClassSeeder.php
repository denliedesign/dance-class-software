<?php

namespace Database\Seeders;

use App\Imports\DanceClassesImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Maatwebsite\Excel\Facades\Excel;


class DanceClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
//        try {
//            Excel::import(new DanceClassesImport, public_path('images/dance-classes.xlsx'));
//            $this->command->info('Dance classes imported successfully!');
//        } catch (\Exception $e) {
//            $this->command->error('Error importing dance classes: ' . $e->getMessage());
//        }
        $faker = Faker::create();

        for ($i = 1; $i <= 120; $i++) {
            $startTime = $faker->time('H:i');
            $endTime = $faker->dateTimeBetween($startTime, '23:59')->format('H:i');

            // Convert military time to readable format
            $startDateTime = new \DateTime($startTime);
            $endDateTime = new \DateTime($endTime);

            DB::table('dance_classes')->insert([
                'name' => $faker->unique()->name . '\'s Dance Class',
                'age_requirement' => $faker->randomElement([
                    '6mo-2', '2-4', '4-6', '7-18'
                ]),
                'dance_style' => $faker->randomElement(['Ballet', 'Hip Hop', 'Contemporary', 'Tap', 'Jazz', 'Acro', 'Musical Theater']),
                'day_of_week' => $faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
                'time' => $startDateTime->format('h:i A') . '-' . $endDateTime->format('h:i A'),
            ]);
        }

    }
}
