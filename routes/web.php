<?php

use Illuminate\Http\Request;

$router
    ->get('/', function () use ($router) {
        return view('home');
    })
    ->post('/', function (Request $request) {
        $itemTitle = $request->post('item_title');

        return view('home', [
            'item_title' => $itemTitle,
            'prediction' => (new Tecnogo\MeliSdk\Client())->predictCategory($itemTitle)
        ]);
    });
