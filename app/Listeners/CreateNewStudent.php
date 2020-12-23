<?php

namespace App\Listeners;

use App\Models\Student;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateNewStudent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Student::create([
            "first_name" => $event->user->name,
            "second_name" => "teacher",
            "third_name" => "teacher",
            "date_birth" => now()->format("d.m.Y"),
            "course" => 6
        ]);
    }
}
