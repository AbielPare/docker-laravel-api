<?php

Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response() -> json([
        'message' => 'OK'
    ]);
});

Route::get('/somar' , function (Request $request) {
    $soma = array_sum($request->all());
    return response() -> json([
        'message' => 'Somado com sucesso' , //Opcional
        'sum' => $soma,
    ]);
});
