<?php

namespace Database\Seeders;

use App\Models\Formuler;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Formuler::insert([
            ['lib_formuler' => 'Php'],
            ['lib_formuler' => 'Java'],
        ]);

        Question::insert([
            ['formuler_id'=> 1,'lib_question' => 'php question 1 ?'],
            ['formuler_id'=> 1, 'lib_question' => 'php question 2 ?'],
            ['formuler_id'=> 1,'lib_question' => 'php question 3 ?'],
            ['formuler_id'=> 1, 'lib_question' => 'php question 4 ?'],
            ['formuler_id'=> 2,'lib_question' => 'java question 1 ?'],
            ['formuler_id'=> 2, 'lib_question' => 'java question 2 ?'],
            ['formuler_id'=> 2,'lib_question' => 'java question 3 ?'],
            ['formuler_id'=> 2, 'lib_question' => 'java question 4 ?'],
        ]);

        Reponse::insert([
            ['question_id'=>1,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>1,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>1,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>2,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>2,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>2,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>3,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>3,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>3,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>4,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>4,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>4,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>5,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>5,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>5,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>6,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>6,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>6,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>7,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>7,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>7,'lib_reponse'=>'reponse 3 v','corect'=>1],
            ['question_id'=>8,'lib_reponse'=>'reponse 1 f','corect'=>0],
            ['question_id'=>8,'lib_reponse'=>'reponse 2 f','corect'=>0],
            ['question_id'=>8,'lib_reponse'=>'reponse 3 v','corect'=>1],
        ]);


    }
}
