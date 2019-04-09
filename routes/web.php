<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

function getPrediction($itemTitle)
{
    return (new Tecnogo\MeliSdk\Client())->predictCategory($itemTitle);
}

$router
    ->get('/', function () use ($router) {
        return view('home');
    })
    ->post('/', function (Request $request) {
        $itemTitle = $request->post('item_title');

        return view('home', [
            'item_title' => $itemTitle,
            'prediction' => getPrediction($itemTitle)
        ]);
    });
