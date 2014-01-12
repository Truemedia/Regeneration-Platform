<?php

class SocialTableSeeder extends Seeder {

    public function run()
    {
    	// Sample data
        Social::create(array(        
            'name' => "Facebook",
	        'link' => "http://facebook.com",
	        'icon' => "facebook"
        ));
		Social::create(array(
            'name' => "Twitter",
	        'link' => "http://twitter.com",
	        'icon' => "twitter"
        ));
		Social::create(array(
            'name' => "YouTube",
            'link' => "http://youtube.com",
            'icon' => "youtube"
        ));
        Social::create(array(
            'name' => "Google+",
            'link' => "http://plus.google.com",
            'icon' => "google-plus"
        ));
        Social::create(array(
            'name' => "Github",
            'link' => "http://github.com",
            'icon' => "github-alt"
        ));
    }
}