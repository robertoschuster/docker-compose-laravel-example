<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $togo = DB::select('select * from places where visited = ? order by name', [0]);
  $visited = DB::select('select * from places where visited = ? order by name', [1]);

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});
