<?php 

use Illuminate\Http\Request;
use App\Models\Signup;

Route::get('/test', function () {
    return response()->json(['message' => 'API route is working']);
});


Route::post('/webinar-signup', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'grade' => 'required|string|max:10',
    ]);

    Signup::create($validated);

    return response()->json(['message' => 'Successfully signed up!'], 201);
});
