<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RaceCardsSeeder extends Seeder
{
    public function run()
    {
        $files = [
            storage_path('app/public/RaceCard_XGD.json'),
            storage_path('app/public/RaceCard_LYO.json'),
            storage_path('app/public/RaceCard_C3R.json'),
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('race_entries')->truncate();
        DB::table('horses')->truncate();
        DB::table('jockeys')->truncate();
        DB::table('trainers')->truncate();
        DB::table('races')->truncate();
        DB::table('tracks')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($files as $file) {
            if (File::exists($file)) {
                $data = json_decode(File::get($file), true);

                // Example structure - adjust based on your actual JSON structure
                foreach ($data as $trackData) {
                    $trackId = DB::table('tracks')->insertGetId([
                        'name' => $trackData['track_name'],
                        'surface' => $trackData['surface'],
                        'status' => 'active', // Example status
                    ]);

                    foreach ($trackData['races'] as $race) {
                        $raceId = DB::table('races')->insertGetId([
                            'track_id' => $trackId,
                            'date' => $race['date'],
                            'race_number' => $race['number'],
                            'title' => $race['title'],
                            'status' => $race['status'],
                            'distance' => $race['distance'],
                            'class_group' => isset($race['class_group']) ? $race['class_group'] : null, // Optional field example
                            'stake' => isset($race['stake']) ? $race['stake'] : null, // Optional field example
                            
                        ]);

                        foreach ($race['entries'] as $entry) {
                            $horseId = $this->ensureHorse($entry['horse']);
                            $jockeyId = $this->ensureJockey($entry['jockey']);
                            $trainerId = $this->ensureTrainer($entry['trainer']);

                            DB::table('race_entries')->insert([
                                'race_id' => $raceId,
                                'horse_id' => $horseId,
                                'jockey_id' => $jockeyId,
                                'trainer_id' => $trainerId,
                                'draw' => $entry['draw'], // Assuming 'draw' is provided in the JSON data for each entry
                                'weight' => $entry['weight'], // Assuming 'weight' is provided
                                'over_weight' => isset($entry['over_weight']) ? $entry['over_weight'] : null, // Optional field
                                'finish_position' => isset($entry['finish_position']) ? $entry['finish_position'] : null, // Optional field
                                'earnings' => isset($entry['earnings']) ? $entry['earnings'] : null, // Optional field
                               
                            ]);
                        }
                    }
                }
            }
        }
    }

    protected function ensureHorse($horseData)
    {
        $horse = DB::table('horses')->where('name', $horseData['name'])->first();
        if (!$horse) {
            $horseId = DB::table('horses')->insertGetId([
                'name' => $horseData['name'],
                'age' => $horseData['age'],
                'sex' => $horseData['sex'],
                'colour' => $horseData['colour'], // Assuming 'colour' is provided in the JSON data
                'breeder' => $horseData['breeder'], // Assuming 'breeder' is provided
                'owner' => $horseData['owner'], // Assuming 'owner' is provided
                'handicaper_rating' => isset($horseData['handicaper_rating']) ? $horseData['handicaper_rating'] : null, // Optional field
                
            ]);
        } else {
            $horseId = $horse->id;
        }

        return $horseId;
    }

    protected function ensureJockey($jockeyData)
    {
        $jockey = DB::table('jockeys')->where('name', $jockeyData['name'])->first();
        if (!$jockey) {
            // $jockeyId = DB::table('jockeys')->insertGetId([
            //     'name' => $jockeyData['name'],
            //     // Other jockey details
            // ]);
        } else {
            $jockeyId = $jockey->id;
        }

        return $jockeyId;
    }

    protected function ensureTrainer($trainerData)
    {
        $trainer = DB::table('trainers')->where('name', $trainerData['name'])->first();
        if (!$trainer) {
            $trainerId = DB::table('trainers')->insertGetId([
                'name' => $trainerData['name'],
                // Other trainer details
            ]);
        } else {
            $trainerId = $trainer->id;
        }

        return $trainerId;
    }
}
