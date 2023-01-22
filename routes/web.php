<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $togo = DB::select('select * from places where visited = ?', [0]);
  $visited = DB::select('select * from places where visited = ?', [1]);

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});
