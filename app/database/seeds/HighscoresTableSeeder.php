<?php

class HighscoresTableSeeder extends Seeder {

    public function run()
    {
    	// Sample data
        Highscore::create(array(
            'username_and_fullname' => "Truemedia (Wade Penistone)",
			'playing_as' => "Reece Neadham",
			'rounds' => "56",
			'kills' => "1097",
			'assists' => "543",
			'downs' => "13",
			'revives' => "48",
			'played_for' => "3 hours 16 minutes 3 seconds",
			'death_by' => "Gored by brutal"
		));
        Highscore::create(array(
		    'username_and_fullname' => "Gamer (John Doe)",
			'playing_as' => "Damian Esterson",
			'rounds' => "3",
			'kills' => "11",
			'assists' => "2",
			'downs' => "1",
			'revives' => "4",
			'played_for' => "6 minutes 47 seconds",
			'death_by' => "Committed suicide"
		));
    }
}