<?php

use Illuminate\Database\Seeder;

use App\Models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Remove all records
		Event::truncate();
		
		Event::create(['name' => 'Event 1', 'slug' => 'event1']);
		Event::create(['name' => 'Event 2', 'slug' => 'event2']);
		Event::create(['name' => 'Event 3', 'slug' => 'event3']);
		Event::create(['name' => 'Event 4', 'slug' => 'event4']);
		Event::create(['name' => 'Event 5', 'slug' => 'event5']);
    }
}
