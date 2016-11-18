<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ================== Home page lead Horm  ================== */
Route::post('store_lead_form_1', 'LA\LeadsController@store_lead_form_1');

/* ================== Test ElasticSearch ================== */

Route::get('search/{query}', function ($query) {
	echo "\n<br>Query: ".$query."\n\n<br><br><br>";
    $orgs = \App\Models\Organization::search($query);
	if($orgs->totalHits()) {
		foreach ($orgs as $org) {
			echo $org->name."(".$org->documentScore().")<br>\n";
		}
	} else {
		echo "No result";
	}
	echo "\n<br>totalHits: ".$orgs->totalHits()."\n<br>";
	echo "\n<br>maxScore: ".$orgs->maxScore()."\n<br>";
	echo "\n<br>took: ".$orgs->took()."\n<br>";
});

/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
