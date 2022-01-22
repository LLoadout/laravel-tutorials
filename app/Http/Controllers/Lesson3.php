<?php

namespace App\Http\Controllers;

use App\Models\User;

class Lesson3 extends Controller
{
    public function index()
    {
        $this->performanceTab()->logTab()->databaseTab()->customTab();
    }

    private function performanceTab(): Lesson3
    {

        // logging to the performance issue tab of your application
        clock()->info("This is a performance issue", ['performance' => true]);

        // using timeline api with begin/end and fluent configuration , logging to the timeline tab
        clock()->event('Sleeping for two seconds')->color('purple')->begin();
        sleep(2);
        clock()->event('Done sleeping')->end();

        return $this;
    }

    private function logTab(): Lesson3
    {
        //sending a message to the log tab
        clock('This is a log message');
        return $this;
    }

    private function databaseTab(): Lesson3
    {
        $users = User::all();

        return $this;
    }

    private function customTab(): Lesson3
    {
        // using a custom tab in the clockwork panel
        $cart = clock()->userData('Statistics')->title('Statistics');
        $cart->counters([
            'Number of users'  => 10,
            'Number of orders' => 50,
        ]);
        return $this;
    }
}