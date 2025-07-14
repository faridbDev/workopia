<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/jobs', function () {
  return '<h1 style="color: red">Available Jobs</h1>';
})->name('jobs');

// Route::get('/test', function (Request $request) {
//   return [
//     'method' => $request->method(),
//     'url' => $request->url(),
//     'path' => $request->path(),
//     'fullUrl' => $request->fullUrl(),
//     'ip' => $request->ip(),
//     'userAgent' => $request->userAgent(),
//     'header' => $request->header(),
//   ];
// });

// Route::get('/users', function (Request $request) {
//   // return $request->query('name');
//   // return $request->only(['name', 'age']);
//   // return $request->all();
//   // return $request->has('name');
//   // return $request->input('name', 'Default Name');
//   return $request->except(['name']);
// });

Route::get('/test', function () {
  return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/html');
});

Route::get('/testt', function () {
  return response()->json(['name' => 'Sina Beiki'])->cookie('name', 'Farid Beiki');
});

Route::get('/read-cookie', function (Request $request) {
  $cookieValue = $request->cookie('name');
  return response()->json(['cookie' => $cookieValue]);
});

Route::get('/download', function () {
  return response()->download(public_path('favicon.ico'));
});


// Route::get('/notfound', function () {
//   return response('Page Not Found', 404);
// });
