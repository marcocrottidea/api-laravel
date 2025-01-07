<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    $results = [];

    for ($i = 0; $i < 100; $i++) {
        $results[] = Country::all()->map(fn($country) => [
            'id' => $country->id,
            'code' => $country->code,
            'name' => $country->name,
        ]);
    }

    return response()->json($results);
});
