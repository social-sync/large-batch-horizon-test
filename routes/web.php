<?php

use App\Jobs\ManyJobs;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dispatch', function () {

    $jobs = collect(range(0, 5000))->map(function() {
        return new ManyJobs();
    });


    Bus::batch($jobs->all())
    ->then(function() {
        Log::info("Done");
    })
    ->dispatch();

    return redirect('/');
});
