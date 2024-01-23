<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*  $trains = [
                [
                    "azienda" => "Italo",
                    "stazione_di_partenza" => "Bari",
                    "stazione_di_arrivo" => "Taranto"
                ],
                [
                    "azienda" => "Trenord",
                    "stazione_di_partenza" => "Bologna",
                    "stazione_di_arrivo" => "Modena"
                ]
            ];

            foreach ($trains as $train) {
                $newTrain = new Train();
                $newTrain->azienda = $train["azienda"];
                $newTrain->stazione_di_partenza =$train["stazione_di_partenza"];
                $newTrain->stazione_di_arrivo =$train["stazione_di_arrivo"];
                $newTrain->save();
            }*/

        for ($i = 0; $i < 3; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->numberBetween(5000, 12500);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 25);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
