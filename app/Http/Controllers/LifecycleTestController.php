<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifecycleTestController extends Controller
{
    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest',function()
        {
            return 'ライフサイクルテスト';
        });

        $test = app()->make('lifeCycleTest');

        dd($test,app());
    }

}
